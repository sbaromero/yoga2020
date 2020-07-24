<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use CYA\YogaBundle\Entity\Stock;
use CYA\YogaBundle\Form\StockType;

class StockController extends Controller
{
    public function indexAction(Request $request)
    {
        $searchQuery = $request->get('query');

        if(!empty($searchQuery)){
            $finder = $this->container->get('fos_elastica.finder.app.stock');
            $stocks = $finder->createPaginatorAdapter($searchQuery);
        }else{
            $em = $this->getDoctrine()->getManager();
            $dql = "SELECT r FROM CYAYogaBundle:Stock r ORDER BY r.id DESC";
            $stocks = $em->createQuery($dql);  
        }

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $stocks, $request->query->getInt('page' , 1),
            10
        );
        
        return $this->render('CYAYogaBundle:Stock:index.html.twig', array('pagination' => $pagination, 'stocks' => $stocks));
    }
    
    public function addAction(Request $request)
    {
        $stock = new Stock();
        
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);
        
        
        
        /*combo de productos*/
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Producto');
        $query = $repository->createQueryBuilder('u')
            ->orderBy('u.descripcion', 'ASC')
            ->where('u.isActive = :rol')
            ->setParameter('rol', '1')

            ->getQuery();
        $productos = $query->getResult();
        $productoQuery = $request->get('producto'); 
        
        if ($form->isSubmitted() && $form->isValid()) {
            
                $em = $this->getDoctrine()->getManager();
                $id = $request->get('producto');
                $arrayproducto  = $em->getRepository('CYAYogaBundle:Producto')->find($id);
                
                $stock->setProducto($arrayproducto);
                $stock->setUsuario($this->get('security.token_storage')->getToken()->getUser());
                $stock->setFechainicio(new \DateTime("now"));
                $em->persist($stock);
                $em->flush();
                
                $arrayproducto->setStock($arrayproducto->getStock()+ $stock->getCantidad());
                $em->persist($arrayproducto);
                $em->flush();
                
                
                $this->addFlash('success', 'El Stock ha sido creado');
                
                return $this->redirectToRoute('cya_stock_add');
        }
      
      
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT r FROM CYAYogaBundle:Stock r ORDER BY r.id DESC";
        $stocks = $em->createQuery($dql);  
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $stocks, $request->query->getInt('page' , 1),
            10
        );
      
        return $this->render('CYAYogaBundle:Stock:add.html.twig', array('productos'=>$productos, 'pagination'=>$pagination,  'form' => $form->createView()));
    }

   public function editAction($id, Request $request)
   {
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('CYAYogaBundle:Stock')->find($id);
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request); 
        
        if(!$stock){
            throw $this->createNotFoundException('Stock no encontrado');
        }
       
        if ($form->isSubmitted() && $form->isValid()) {
            
            $em->flush();
            
            $this->addFlash('success', 'El stock ha sido modificado');
            
            return $this->redirectToRoute('cya_stock_index');
        }
       
        return $this->render('CYAYogaBundle:Stock:edit.html.twig', array('stock' => $stock, 'form' => $form->createView()));
   }

 public function deleteAction($id, Request $request)
    {
       
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('CYAYogaBundle:Stock')->find($id);
       
        $id = $stock->getProducto()->getId();
        $em2 = $this->getDoctrine()->getManager();
        $arrayproducto  = $em2->getRepository('CYAYogaBundle:Producto')->find($id);
        $arrayproducto->setStock($arrayproducto->getStock()-$stock->getCantidad());
        
       
        $em->persist($arrayproducto);
        $em->flush();
            
        $em->remove($stock);
        $em->flush();  
        $successMessage = 'Stock eliminado, el producto '. $arrayproducto->getDescripcion().' ahora tiene un stock de '. $arrayproducto->getStock();
        $this->addFlash('success', $successMessage);
        return $this->redirectToRoute('cya_stock_add');
    }
    
    
    
}
