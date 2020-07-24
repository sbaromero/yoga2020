<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use CYA\YogaBundle\Entity\Inscripta;
use CYA\YogaBundle\Entity\Materia;
use CYA\YogaBundle\Entity\User;
use CYA\YogaBundle\Form\InscriptaType;
use CYA\YogaBundle\Form\InscriptaEditType;

class InscriptaController extends Controller
{
    public function indexAction($id, Request $request)
    {
      
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Materia');
        $materias = $repository->findAll();



        $materiaQuery = $request->get('materia'); 
        if ($materiaQuery){
        $tituloarray = $repository->findOneById($materiaQuery);
        $titulo =$tituloarray->getTitulo().' ('.$tituloarray->getCurso()->getTitulo().')' ;
        }else{
           $titulo = ' ' ;
        }

        $em = $this->getDoctrine()->getManager();
        $repoinscripciones = $this->getDoctrine()->getRepository('CYAYogaBundle:Inscripta');
        $inscriptas = $repoinscripciones->findByMateria($materiaQuery);

     if (!$inscriptas){
            $this->addFlash('notice', 'Elija una materia y presione Buscar');
        }


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $inscriptas, $request->query->getInt('page' , 1), 10);
        
        return $this->render('CYAYogaBundle:Inscripta:index.html.twig', array('titulo' => $titulo, 'materias' => $materias,'pagination' => $pagination,  ));
    }
    
    public function addAction(Request $request)
    {   
         $em = $this->getDoctrine()->getManager();
         $repo = $this->getDoctrine()->getRepository('CYAYogaBundle:Usuario');
         $user = $repo->findOneById($request->get('id'));
        
        
        $inscripta = new Inscripta();
        $form = $this->createForm(InscriptaType::class, $inscripta);
        $form->handleRequest($request);
        
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Materia');
        $materias = $repository->findAll();

        $materiaQuery = $request->get('materia'); 
        
        
        $repoinscripciones = $this->getDoctrine()->getRepository('CYAYogaBundle:Inscripta');
        $inscripciones = $repoinscripciones->findOneByUsuario($user->getId());
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($inscripciones, $request->query->getInt('page' , 1),30);
         
        if ($form->isSubmitted() && $form->isValid()) {
                
                if (!$materiaQuery){
                    $this->addFlash('notice', 'Elija una materia');
                    return $this->redirectToRoute('cya_inscripta_add', array('pagination' => $pagination,'id' => $user->getId()));
                }
                
                
                $em = $this->getDoctrine()->getManager();
                $materia = $repository->findOneById($materiaQuery);
             
                $yainscripto = $repoinscripciones->findOneByMateriaAndUser($materia->getId(), $user->getId());
                
                if ($yainscripto){
                      $this->addFlash('error', 'El Alumno '. $user->getNombrecompleto().' ya se encuentra inscripto a esta materia: '.$materia->getTitulo().' ('.$materia->getCurso()->getTitulo().')');
                    return $this->redirectToRoute('cya_inscripta_add', array('pagination' => $pagination,'id' => $user->getId()));
                    
                }
                    
             
                $inscripta->setMateria($materia);
                $inscripta->setUsuario($user);
                $inscripta->setNota('EN CURSO');
                $inscripta->setFechains(new \DateTime("now") );
                $em->persist($inscripta);
                $em->flush();
                
                $this->addFlash('success', 'Inscripción realizada con éxito');
                
                return $this->redirectToRoute('cya_inscripta_add', array('pagination' => $pagination,'id' => $user->getId()));
                 
        }
      
        $hoy= new \DateTime("now");
        return $this->render('CYAYogaBundle:Inscripta:add.html.twig', array(
            'user' => $user,
            'hoy' => $hoy,
            'pagination' => $pagination,
            'materias' => $materias,
            'form' => $form->createView()));
    }

   public function editAction($id, Request $request)
   {
        $em = $this->getDoctrine()->getManager();
        $inscripta = $em->getRepository('CYAYogaBundle:Inscripta')->find($id);
      
        $form = $this->createForm(InscriptaEditType::class, $inscripta);
        $form->handleRequest($request); 
        
        $em = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository('CYAYogaBundle:Usuario');
        $user = $repo->findOneById($inscripta->getUsuario()->getId());
        
        
        // $inscripta = new Inscripta();
        // $form = $this->createForm(InscriptaType::class, $inscripta);
        // $form->handleRequest($request);
        
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Materia');
        $materias = $repository->findAll();

        $materiaQuery = $request->get('materia'); 
        
        
        $repoinscripciones = $this->getDoctrine()->getRepository('CYAYogaBundle:Inscripta');
        $inscripciones = $repoinscripciones->findOneByUsuario($user->getId());
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($inscripciones, $request->query->getInt('page' , 1),30);
         
        if ($form->isSubmitted() && $form->isValid()) {
                
                $em->flush();
                
                $this->addFlash('success', 'Modificación de inscripción realizada con éxito');
                
                return $this->redirectToRoute('cya_inscripta_edit', array('pagination' => $pagination,'id' => $inscripta->getId()));
                 
        }
      
        $hoy= new \DateTime("now");
        return $this->render('CYAYogaBundle:Inscripta:edit.html.twig', array(
            'user' => $user,
            'hoy' => $hoy,
            'inscripta'=> $inscripta,
            'pagination' => $pagination,
            'materias' => $materias,
            'form' => $form->createView()));
   }

 public function deleteAction($id, Request $request)
    { 
        $em = $this->getDoctrine()->getManager();
        $inscripta = $em->getRepository('CYAYogaBundle:Inscripta')->find($id);
        $user = $inscripta->getUsuario();
        
        $em->remove($inscripta);
        $em->flush();  
        $successMessage = 'La inscripción ha sido eliminada';
        $this->addFlash('success', $successMessage);
    
        
        return $this->redirectToRoute('cya_inscripta_add', array('id' => $user->getId()));
      
    }
    
  
  
    
    
}
