<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use CYA\YogaBundle\Entity\Cursada;
use CYA\YogaBundle\Entity\Materia;
use CYA\YogaBundle\Entity\User;
use CYA\YogaBundle\Form\CursadaType;
use CYA\YogaBundle\Form\CursadaEditType;

class CursadaController extends Controller
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
        $repoinscripciones = $this->getDoctrine()->getRepository('CYAYogaBundle:Cursada');
        $cursadas = $repoinscripciones->findByMateria($materiaQuery);

     if (!$cursadas){
            $this->addFlash('notice', 'Elija una materia y presione Buscar');
        }


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $cursadas, $request->query->getInt('page' , 1), 10);
        
        return $this->render('CYAYogaBundle:Cursada:index.html.twig', array('titulo' => $titulo, 'materias' => $materias,'pagination' => $pagination,  ));
    }
    
    public function addAction(Request $request)
    {   
         $em = $this->getDoctrine()->getManager();
         $repo = $this->getDoctrine()->getRepository('CYAYogaBundle:Usuario');
         $user = $repo->findOneById($request->get('id'));
        
        
        $cursada = new Cursada();
        $form = $this->createForm(CursadaType::class, $cursada);
        $form->handleRequest($request);
        
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Materia');
        $materias = $repository->findAll();

        $materiaQuery = $request->get('materia'); 
        
        
        $repoinscripciones = $this->getDoctrine()->getRepository('CYAYogaBundle:Cursada');
        $inscripciones = $repoinscripciones->findOneByUsuario($user->getId());
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($inscripciones, $request->query->getInt('page' , 1),30);
         
        if ($form->isSubmitted() && $form->isValid()) {
                
                if (!$materiaQuery){
                    $this->addFlash('notice', 'Elija una materia');
                    return $this->redirectToRoute('cya_cursada_add', array('pagination' => $pagination,'id' => $user->getId()));
                }
                
                
                $em = $this->getDoctrine()->getManager();
                $materia = $repository->findOneById($materiaQuery);
             
                $yainscripto = $repoinscripciones->findOneByMateriaAndUser($materia->getId(), $user->getId());
                
                if ($yainscripto){
                      $this->addFlash('error', 'El Alumno '. $user->getNombrecompleto().' ya se encuentra inscripto a esta materia: '.$materia->getTitulo().' ('.$materia->getCurso()->getTitulo().')');
                    return $this->redirectToRoute('cya_cursada_add', array('pagination' => $pagination,'id' => $user->getId()));
                    
                }
                    
             
                $cursada->setMateria($materia);
                $cursada->setUsuario($user);
                $cursada->setNota('EN CURSO');
                $cursada->setFechains(new \DateTime("now") );
                $em->persist($cursada);
                $em->flush();
                
                $this->addFlash('success', 'Inscripción realizada con éxito');
                
                return $this->redirectToRoute('cya_cursada_add', array('pagination' => $pagination,'id' => $user->getId()));
                 
        }
      
        $hoy= new \DateTime("now");
        return $this->render('CYAYogaBundle:Cursada:add.html.twig', array(
            'user' => $user,
            'hoy' => $hoy,
            'pagination' => $pagination,
            'materias' => $materias,
            'form' => $form->createView()));
    }

   public function editAction($id, Request $request)
   {
        $em = $this->getDoctrine()->getManager();
        $cursada = $em->getRepository('CYAYogaBundle:Cursada')->find($id);
      
        $form = $this->createForm(CursadaEditType::class, $cursada);
        $form->handleRequest($request); 
        
        $em = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository('CYAYogaBundle:Usuario');
        $user = $repo->findOneById($cursada->getUsuario()->getId());
        
        
        // $cursada = new Cursada();
        // $form = $this->createForm(CursadaType::class, $cursada);
        // $form->handleRequest($request);
        
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Materia');
        $materias = $repository->findAll();

        $materiaQuery = $request->get('materia'); 
        
        
        $repoinscripciones = $this->getDoctrine()->getRepository('CYAYogaBundle:Cursada');
        $inscripciones = $repoinscripciones->findOneByUsuario($user->getId());
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($inscripciones, $request->query->getInt('page' , 1),30);
         
        if ($form->isSubmitted() && $form->isValid()) {
                
                $em->flush();
                
                $this->addFlash('success', 'Modificación de inscripción realizada con éxito');
                
                return $this->redirectToRoute('cya_cursada_edit', array('pagination' => $pagination,'id' => $cursada->getId()));
                 
        }
      
        $hoy= new \DateTime("now");
        return $this->render('CYAYogaBundle:Cursada:edit.html.twig', array(
            'user' => $user,
            'hoy' => $hoy,
            'cursada'=> $cursada,
            'pagination' => $pagination,
            'materias' => $materias,
            'form' => $form->createView()));
   }

 public function deleteAction($id, Request $request)
    { 
        $em = $this->getDoctrine()->getManager();
        $cursada = $em->getRepository('CYAYogaBundle:Cursada')->find($id);
        $user = $cursada->getUsuario();
        
        $em->remove($cursada);
        $em->flush();  
        $successMessage = 'La inscripción ha sido eliminada';
        $this->addFlash('success', $successMessage);
    
        
        return $this->redirectToRoute('cya_cursada_add', array('id' => $user->getId()));
      
    }
    
  
  
    
    
}
