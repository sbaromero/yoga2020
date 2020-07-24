<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use CYA\YogaBundle\Entity\Rubro;
use CYA\YogaBundle\Entity\Caja;
use CYA\YogaBundle\Entity\Usuario;
use CYA\YogaBundle\Entity\Producto;
use CYA\YogaBundle\Entity\Movimiento;
use CYA\YogaBundle\Entity\Maestroventa;
use CYA\YogaBundle\Entity\Detalleventa;
use CYA\YogaBundle\Form\MovimientoType;
use Doctrine\Common\Collections\ArrayCollection;

class CajaController extends Controller
{
    public function addAction(Request $request)
    {

        $saldo =0;
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Movimiento');
        $query = $repository->createQueryBuilder('m')
        ->orderBy('m.fecha', 'DESC')
        ->getQuery();
        $movimientos = $query->getResult();

        foreach($movimientos as $mov){
            if($mov->getRubro()->getTipo() == 'D'){
                $saldo = $saldo - $mov->getMonto();
            }else{
                $saldo = $saldo + $mov->getMonto();
            }
        }
         
             $em = $this->getDoctrine()->getManager();
             $caja = new Caja();
             $caja->setFecha(new \DateTime("now"));
             $caja->setMonto($saldo);
             $em->persist($caja);
             $em->flush();
        
        $successMessage = 'Nuevo Corte de Caja Asentado';
        $this->addFlash('success', $successMessage);
        
       

       return $this->redirectToRoute('cya_caja_index');
    }
    
    public function indexAction(Request $request)
    {
        $searchQuery = $request->get('query');
        $tipoQuery = $request->get('tipo');
        $dcQuery = $request->get('dc');
        $fhQuery = $request->get('fh');
        $fdQuery = $request->get('fd');
        $rubroQuery = $request->get('rubro');
        $usuarioQuery = $request->get('usuario'); 
        
        $select = "SELECT m FROM CYAYogaBundle:Caja m";

            
        if(!empty($tipoQuery)){
            $select = $select . " AND m.tipo = '" . $tipoQuery ."'";
        }
        
        if(!empty($dcQuery)){
            $select = $select . " AND m.rubro in (SELECT r FROM CYAYogaBundle:Rubro r WHERE r.tipo = '" . $dcQuery ."')";
        }
        
        if(!empty($rubroQuery)){
            $select = $select . " AND m.rubro = (SELECT ru FROM CYAYogaBundle:Rubro ru WHERE ru.id = " . $rubroQuery .")";
        }
        
        if(!empty($fhQuery)){
            $select = $select . " AND m.fecha <= '" . $fhQuery ." 23:59:59'";
        }
        
        if(!empty($fdQuery)){
            $select = $select . " AND m.fecha >= '" . $fdQuery ." 00:00:00'";
        }
        
        if(!empty($usuarioQuery)){
            $select = $select . " AND m.usuario = (SELECT u FROM CYAYogaBundle:Usuario u WHERE u.id = " . $usuarioQuery .")";
        }
        
        $select = $select . " ORDER BY m.id DESC";
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery($select);
        $movimientos = $query->getResult();

     
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $movimientos, $request->query->getInt('page' , 1),
            30
        );
        
        
        return $this->render('CYAYogaBundle:Caja:index.html.twig', 
        array('pagination' => $pagination));
    }
    
 
}
