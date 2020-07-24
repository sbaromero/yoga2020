<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use CYA\YogaBundle\Entity\Tema;
use CYA\YogaBundle\Form\TemaType;

class TemaController extends Controller
{
    public function indexAction(Request $request)
    {
        $searchQuery = $request->get('query');

            $em = $this->getDoctrine()->getManager();
            $dql = "SELECT r FROM CYAYogaBundle:Tema r ORDER BY r.id DESC";
            $temas = $em->createQuery($dql);  


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $temas, $request->query->getInt('page' , 1), 10);
        
        return $this->render('CYAYogaBundle:Tema:index.html.twig', array('pagination' => $pagination, 'temas' => $temas));
    }
    
    public function addAction(Request $request)
    {
        $tema = new Tema();
        
        $form = $this->createForm(TemaType::class, $tema);
        $form->handleRequest($request);
        
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Materia');
        $query = $repository->createQueryBuilder('u')
            ->where('1 = 1')
            ->getQuery();
        $materias = $query->getResult();
        
         $materiaQuery = $request->get('materia'); 
         
        if ($form->isSubmitted() && $form->isValid()) {
            
                $em = $this->getDoctrine()->getManager();
                $materia = $repository->findOneById($materiaQuery);
             
                $tema->setMateria($materia);
                $em->persist($tema);
                $em->flush();
                
                $this->addFlash('success', 'Nueva Tema creada');
                
                return $this->redirectToRoute('cya_tema_index');
        }
      
        return $this->render('CYAYogaBundle:Tema:add.html.twig', array('materia' => $materias,'form' => $form->createView()));
    }

   public function editAction($id, Request $request)
   {
        $em = $this->getDoctrine()->getManager();
        $tema = $em->getRepository('CYAYogaBundle:Tema')->find($id);
        $form = $this->createForm(TemaType::class, $tema);
        $form->handleRequest($request); 
        
        if(!$tema){
            throw $this->createNotFoundException('Tema no encontrado');
        }
       
        if ($form->isSubmitted() && $form->isValid()) {
            
            $em->flush();
            
            $this->addFlash('success', 'El tema ha sido modificada');
            
            return $this->redirectToRoute('cya_tema_index');
        }
       
        return $this->render('CYAYogaBundle:Tema:edit.html.twig', array('tema' => $tema, 'form' => $form->createView()));
   }

 public function deleteAction($id, Request $request)
    { 
       try{ $em = $this->getDoctrine()->getManager();
        $tema = $em->getRepository('CYAYogaBundle:Tema')->find($id);
        $em->remove($tema);
        $em->flush();  
        $successMessage = 'Tema eliminada';
        $this->addFlash('success', $successMessage);
       }
        catch (\Exception $e) {
           $this->addFlash('error', 'Imposible eliminar este Tema, verifique que no tenga alumnos inscriptos.');
            }
        
        
        return $this->redirectToRoute('cya_tema_index');
      
    }
    
    
    
}
