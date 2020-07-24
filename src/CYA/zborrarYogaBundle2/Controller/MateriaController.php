<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use CYA\YogaBundle\Entity\Materia;
use CYA\YogaBundle\Form\MateriaType;

class MateriaController extends Controller
{
    public function indexAction(Request $request)
    {
        $searchQuery = $request->get('query');

            $em = $this->getDoctrine()->getManager();
            $dql = "SELECT r FROM CYAYogaBundle:Materia r ORDER BY r.id DESC";
            $materias = $em->createQuery($dql);  


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $materias, $request->query->getInt('page' , 1), 10);
        
        return $this->render('CYAYogaBundle:Materia:index.html.twig', array('pagination' => $pagination, 'materias' => $materias));
    }
    
    public function addAction(Request $request)
    {
        $materia = new Materia();
        
        $form = $this->createForm(MateriaType::class, $materia);
        $form->handleRequest($request);
        
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Curso');
        $query = $repository->createQueryBuilder('u')
            ->where('1 = 1')
            ->getQuery();
        $cursos = $query->getResult();
        
         $cursoQuery = $request->get('curso'); 
         
        if ($form->isSubmitted() && $form->isValid()) {
            
                $em = $this->getDoctrine()->getManager();
                $curso = $repository->findOneById($cursoQuery);
             
                $materia->setCurso($curso);
                $em->persist($materia);
                $em->flush();
                
                $this->addFlash('success', 'Nuevo Módulo creado');
                
                return $this->redirectToRoute('cya_materia_index');
        }
      
        return $this->render('CYAYogaBundle:Materia:add.html.twig', array('curso' => $cursos,'form' => $form->createView()));
    }

   public function editAction($id, Request $request)
   {
        $em = $this->getDoctrine()->getManager();
        $materia = $em->getRepository('CYAYogaBundle:Materia')->find($id);
        $form = $this->createForm(MateriaType::class, $materia);
        $form->handleRequest($request); 
        
        if(!$materia){
            throw $this->createNotFoundException('Materia no encontrada');
        }
       
        if ($form->isSubmitted() && $form->isValid()) {
            
            $em->flush();
            
            $this->addFlash('success', 'El módulo ha sido modificado');
            
            return $this->redirectToRoute('cya_materia_index');
        }
       
        return $this->render('CYAYogaBundle:Materia:edit.html.twig', array('materia' => $materia, 'form' => $form->createView()));
   }

 public function deleteAction($id, Request $request)
    { 
       try{ $em = $this->getDoctrine()->getManager();
        $materia = $em->getRepository('CYAYogaBundle:Materia')->find($id);
        $em->remove($materia);
        $em->flush();  
        $successMessage = 'Módulo eliminado';
        $this->addFlash('success', $successMessage);
       }
        catch (\Exception $e) {
           $this->addFlash('error', 'Imposible eliminar este Módulo, verifique que no tenga alumnos inscriptos.');
            }
        
        
        return $this->redirectToRoute('cya_materia_index');
      
    }
    
    
    
}
