<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use CYA\YogaBundle\Entity\Curso;
use CYA\YogaBundle\Entity\TipoCuota;
use CYA\YogaBundle\Form\CursoType;


class CursoController extends Controller
{
    public function indexAction(Request $request)
    {
        $searchQuery = $request->get('query');


       //combo de tipos de cuota
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Tipocuota');
        $query = $repository->createQueryBuilder('u')
            ->where('1 = 1')
            ->orderBy('u.nombre','ASC')
            ->getQuery();
        $cuotas = $query->getResult();
     
         $cuota = 0;
         $cuotaQuery = $request->get('cuota'); 
         $cuotaelegida = $repository->findOneById($cuotaQuery);
          
         $nombrecuota = 'Elija un tipo de cuota';



         $em = $this->getDoctrine()->getManager();
         $dql = "SELECT r FROM CYAYogaBundle:Curso r ";
        
         if ($cuotaQuery){
         $dql = $dql . "where r.tipocuota = " . $cuotaQuery;
         }
        
         $dql = $dql . " ORDER BY r.id DESC";
         $cursos = $em->createQuery($dql);  


    


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $cursos, $request->query->getInt('page' , 1), 10);
        
        return $this->render('CYAYogaBundle:Curso:index.html.twig', array('pagination' => $pagination,  'cuotas' => $cuotas, 'cursos' => $cursos , 'elegida'=> $cuotaelegida ));
    }
    
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $curso = new Curso();
        $form = $this->createForm(CursoType::class, $curso);
        $form->handleRequest($request);
        
       $elegida=$em->getRepository('CYAYogaBundle:TipoCuota')->find($request->get('cursoid'));
         
        if ($form->isSubmitted() && $form->isValid()) {
            
                $em = $this->getDoctrine()->getManager();
                $em->persist($curso);
                $curso->setTipoCuota($elegida);
                $em->flush();
            
                
                $this->addFlash('success', 'El Video/Archivo ha sido agregado con éxito');
                
                return $this->redirectToRoute('cya_curso_index');
        }
      
        $cursonombre=$request->get('cursonombre'); ;
        return $this->render('CYAYogaBundle:Curso:add.html.twig', array('curso' => $curso, 'cursonombre' => $cursonombre,'form' => $form->createView()));
    }

   public function editAction($id,  Request $request)
   {
        $em = $this->getDoctrine()->getManager();
        $curso = $em->getRepository('CYAYogaBundle:Curso')->find($id);
        $form = $this->createForm(CursoType::class, $curso);
        $form->handleRequest($request); 
        
        $elegida=$em->getRepository('CYAYogaBundle:TipoCuota')->find($request->get('cursoid'));
        
        
        
        if(!$curso){
            throw $this->createNotFoundException('Video/Archivo no encontrado');
        }
       
        if ($form->isSubmitted() && $form->isValid()) {
            
            $curso->setTipoCuota($elegida);
            $em->flush();
            $this->addFlash('success', 'El Video/Archivo ha sido modificado exitosamente');
            return $this->redirectToRoute('cya_curso_index');
        }
        
        $cursonombre=$request->get('cursonombre'); ;
       
        return $this->render('CYAYogaBundle:Curso:edit.html.twig', array('curso' => $curso, 'cursonombre' => $cursonombre,'form' => $form->createView()));
   }

 public function deleteAction($id, Request $request)
    {
       try{ $em = $this->getDoctrine()->getManager();
        $curso = $em->getRepository('CYAYogaBundle:Curso')->find($id);
        $em->remove($curso);
        $em->flush();  
        $successMessage = 'Video/Archivo eliminado';
        $this->addFlash('success', $successMessage);
         }catch (\Exception $e) {
           $this->addFlash('error', 'Imposible eliminar este Video/Archivo, verifique si se puede editar');
            }
        return $this->redirectToRoute('cya_curso_index');
    }
    
    
    
}
