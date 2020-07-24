<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use CYA\YogaBundle\Entity\Producto;
use CYA\YogaBundle\Form\ProductoType;

class ProductoController extends Controller
{   
    public function deleteAction($id, Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('CYAYogaBundle:Producto')->find($id);
       
        if(!$producto)
        {
            throw $this->createNotFoundException('producto no encontrado');
        }   
        
        

        try
        {
        
        $nombre = $producto->getDescripcion();
        $em->remove($producto);
        $em->flush();

        
        $successMessage = 'Producto '. $nombre.' eliminado';
        $this->addFlash('success', $successMessage);

        return $this->redirectToRoute('cya_producto_index');
        
        }
        
        
       catch(\Exception $e)
       {
        $successMessage = 'Producto '. $nombre.' no se puede eliminar, es probable que esté incluido en una venta, pruebe con cambiarlo a inactivo';
        $this->addFlash('success', $successMessage); 
         return $this->redirectToRoute('cya_producto_index');
       }
        
        
    }
    
    
    public function indexAction(Request $request)
    {
        $searchQuery = $request->get('productot');
        $tcQuery = $request->get('tipoproducto');
        
         $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Producto');
        $query = $repository->createQueryBuilder('u')
            ->where('1 = 1')
            ->getQuery();
        $productot = $query->getResult();
            
            
            
            $em = $this->getDoctrine()->getManager();
            
             $dql = "SELECT u FROM CYAYogaBundle:Producto u WHERE u.id > 0";
        
            
            if(!empty($tcQuery)){
                $dql = $dql . " AND u.tipoproducto = (SELECT t FROM CYAYogaBundle:Tipoproducto t WHERE t.id = " . $tcQuery .")";
            }
            
              if(!empty($searchQuery)){
                $dql = $dql . " AND u.id =  " . $searchQuery;
            }
            
            $dql = $dql . " ORDER BY u.descripcion asc";
            
            
            $productos = $em->createQuery($dql);  
        

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $productos, $request->query->getInt('page' , 1),
            30
        );
        
        $em = $this->getDoctrine()->getManager();
        $tipoproductos = $em->getRepository('CYAYogaBundle:Tipoproducto')->findAll();
        
        return $this->render('CYAYogaBundle:Producto:index.html.twig', array('pagination' => $pagination, 
        'productos' => $productos,'tipoproductos' => $tipoproductos, 'productot' => $productot));
        
        
        
    }
    
    public function addAction(Request $request)
    {
        $producto = new Producto();
        
        $form = $this->createForm(ProductoType::class, $producto);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
                $em = $this->getDoctrine()->getManager();
                $em->persist($producto);
                $em->flush();
                
                $this->addFlash('success', 'El producto '.$producto->getDescripcion().' ha sido creado');
                
                return $this->redirectToRoute('cya_producto_index');
        }
      
        return $this->render('CYAYogaBundle:Producto:add.html.twig', array('form' => $form->createView()));
    }

   public function editAction($id, Request $request)
   {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('CYAYogaBundle:Producto')->find($id);
        $form = $this->createForm(ProductoType::class, $producto);
        $form->handleRequest($request); 
        
        if(!$producto){
            throw $this->createNotFoundException('Producto no encontrado');
        }
       
        if ($form->isSubmitted() && $form->isValid()) {
            
            $em->flush();
            
            $this->addFlash('success', 'El producto '.$producto->getDescripcion().' ha sido modificado');
            
            return $this->redirectToRoute('cya_producto_index');
           
        }
       
        return $this->render('CYAYogaBundle:Producto:edit.html.twig', array('producto' => $producto, 'form' => $form->createView()));
   }
}
