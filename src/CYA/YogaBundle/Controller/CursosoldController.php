<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use CYA\YogaBundle\Entity\Producto;
use CYA\YogaBundle\Entity\Cursosold;


class CursosoldController extends Controller
{   
   
    
    public function indexAction(Request $request)
    {
        
         $tcQuery = $request->get('cursosfin');
        
         $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Tipocuota');
         $query = $repository->createQueryBuilder('u')
            ->where('u.activa = 0')
            ->getQuery();
         $cursosfin = $query->getResult();
            
            
            
          $em = $this->getDoctrine()->getManager();
           $dql = "SELECT u FROM CYAYogaBundle:Cursosold u WHERE u.id > 0";
            
            if(!empty($tcQuery)){
                $dql = $dql . " AND u.tipocuota = (SELECT t FROM CYAYogaBundle:Tipocuota t WHERE t.id = " . $tcQuery .")";
            }
            
            
        $productos = $em->createQuery($dql);  
        

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $productos, $request->query->getInt('page' , 1),
            300
        );
        
        $em = $this->getDoctrine()->getManager();
        $tipoproductos = $em->getRepository('CYAYogaBundle:Tipocuota')->findAll();
        
        return $this->render('CYAYogaBundle:Cursosold:index.html.twig', array('pagination' => $pagination, 
        'productos' => $productos,'tipoproductos' => $tipoproductos, 'cursosfin' => $cursosfin));
        
        
        
    }
    
   
}
