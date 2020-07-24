<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use CYA\YogaBundle\Entity\Proveedor;
use CYA\YogaBundle\Entity\Proveedorcc;
use CYA\YogaBundle\Form\ProveedorccType;
use CYA\YogaBundle\Form\ProveedorpagoType;
use CYA\YogaBundle\Entity\Movimiento;
use CYA\YogaBundle\Entity\Rubro;

class ProveedorccController extends Controller
{
    public function indexAction(Request $request)
    {
         
       
        $rol = $this->get('security.token_storage')->getToken()->getUser()->getRol();
      
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Proveedor');
  
        
          if($rol == 'ROLE_SUPER'){
            $query = $repository->createQueryBuilder('u')
            ->where('1=1')
            ->orderBy('u.nombre')
            ->getQuery();
      
            }
        
          if($rol == 'ROLE_ADMIN'){
            $query = $repository->createQueryBuilder('u')
            ->where('u.tipo=:tipo')
            ->setParameter('tipo','OTRO')
            ->orderBy('u.nombre')
            ->getQuery();
      
            }
       
        
        $proveedores = $query->getResult();
    
     
        $proQuery = $request->get('proveedorq');
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT p FROM CYAYogaBundle:Proveedorcc p";
        
         if(!empty($proQuery)){
                $dql = $dql . " where p.proveedor in (SELECT t FROM CYAYogaBundle:Proveedor t 
                WHERE t.id = " . $proQuery .
               
               ")";
            }
        
       
       
       
       if(!empty($pagoQuery)){
            if($pagoQuery == 'S'){
                $dql = $dql . "AND t.deuda <= t.pagado ";
            }
            if($pagoQuery == 'N'){
                $dql = $dql . "AND t.deuda > t.pagado  ";
            }
        }
       
       
       if ($rol !='ROLE_SUPER'){
       
        if(empty($proQuery)){
            $dql=$dql. " where p.proveedor in (SELECT t FROM CYAYogaBundle:Proveedor t WHERE t.tipo = 'OTRO'".")" ;
        }
       }
        
         
        
        
        $dql=$dql." ORDER BY p.id DESC";
        
        $proveedorcc = $em->createQuery($dql);  
        
        $resultado= $proveedorcc->getResult();
         
        
        $deuda=0;
        $pagado=0;
         foreach($resultado as $mov){

                 $deuda = $deuda + $mov->getDeuda();
                 $pagado = $pagado + $mov->getPagado();
            
        }
       
       $saldo = $deuda-$pagado;
       

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $resultado, $request->query->getInt('page' , 1),
            40
        );
        
     
        
        
        return $this->render('CYAYogaBundle:Proveedorcc:index.html.twig', 
        array('pagination' => $pagination, 'proveedores' => $proveedores,'proveedorcc' => $proveedorcc,'deuda' => $deuda,'pagado' => $pagado,'saldo' => $saldo));
    }
    
    public function addAction(Request $request)
    {
        
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Proveedor');
        $query = $repository->createQueryBuilder('u')
            ->where('1=1')
            ->getQuery();
        $proveedores = $query->getResult();

        
        
        $proveedorcc= new Proveedorcc();
        $form = $this->createForm(ProveedorccType::class, $proveedorcc);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
               
               $proveedorid = $request->get('proveedor'); 
               if ($proveedorid != null){
               
                $proveedorelegido = $repository->findOneById($proveedorid);
                $proveedorcc->setProveedor($proveedorelegido);
                $proveedorcc->setPagado(0);
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($proveedorcc);
                $em->flush();
                
                $this->addFlash('success', 'CC. con Proveedor ha sido creada');
                return $this->redirectToRoute('cya_proveedorcc_index');
               }
               
        }
      
        return $this->render('CYAYogaBundle:Proveedorcc:add.html.twig', array('proveedores'=>$proveedores,'form' => $form->createView()));
    }

   public function editAction($id, Request $request)
   {
          
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Proveedor');
        $query = $repository->createQueryBuilder('u')
            ->where('1=1')
            ->getQuery();
        $proveedores = $query->getResult();

        
        $em = $this->getDoctrine()->getManager();
        $proveedorcc = $em->getRepository('CYAYogaBundle:Proveedorcc')->find($id);
        $idelegido = $proveedorcc->getProveedor()->getId();
        $form = $this->createForm(ProveedorccType::class, $proveedorcc);
        $form->handleRequest($request); 
        
        if(!$proveedorcc){
            throw $this->createNotFoundException('CC de Proveedor  no encontrada');
        }
       
        if ($form->isSubmitted() && $form->isValid()) {
            
              $proveedorid = $request->get('proveedor'); 
             if ($proveedorid != null){
               
                $proveedorelegido = $repository->findOneById($proveedorid);
                $proveedorcc->setProveedor($proveedorelegido);
            
            $em->flush();
            
            $this->addFlash('success', 'La cc de proveedor ha sido modificada');
            
            return $this->redirectToRoute('cya_proveedorcc_index');
             }
            
        }
       
        return $this->render('CYAYogaBundle:Proveedorcc:edit.html.twig', array('idelegido'=>$idelegido,'proveedores'=>$proveedores,
        'proveedorcc' => $proveedorcc, 'form' => $form->createView()));
   }

 public function deleteAction($id, Request $request)
    {
        
         $em = $this->getDoctrine()->getManager();
         $proveedorcc = $em->getRepository('CYAYogaBundle:Proveedorcc')->find($id);
         
         $movimiento = new Movimiento();
          
            $rubro = $em->getRepository('CYAYogaBundle:Rubro')->find(7);
            if(!$rubro){
                $rubro = new Rubro();
                $rubro->setNombre('CORRECCION DE CAJA (CREDITO)');
                $rubro->setTipo('C');
                $rubro->setIsActive(1);
                $em->persist($rubro);
                $em->flush(); 
                $movimiento->setRubro($rubro);
            }else{
                $movimiento->setRubro($rubro);
            }
            $movimiento->setTipo('CC');
            $movimiento->SetDescripcion('CREDITO DE CAJA POR CORRECCION EN CC PROVEEDORES');
            $movimiento->setUsuario($this->get('security.token_storage')->getToken()->getUser());
            $movimiento->setFecha(new \DateTime("now"));
            $movimiento->setMonto($proveedorcc->getPagado());
            //$movimiento->setAlumnocc($this->get();
            $em->persist($movimiento);
            $em->flush(); 
            $this->addFlash('success', 'Ha sido actualizada la caja');
        
        
        
      
        $proveedorcc = $em->getRepository('CYAYogaBundle:Proveedorcc')->find($id);
        $em->remove($proveedorcc);
        $em->flush();  
        $successMessage = 'Cuenta Corriente de Proveedor eliminada';
        $this->addFlash('success', $successMessage);
       
       
       

        return $this->redirectToRoute('cya_proveedorcc_index');
    }
    
 public function pagoAction($id, Request $request)
   {
          
         $em = $this->getDoctrine()->getManager();
         $proveedorcc = $em->getRepository('CYAYogaBundle:Proveedorcc')->find($id);
         $idelegido = $proveedorcc->getProveedor()->getId();
         
         $tipo = $proveedorcc->getProveedor()->getTipo();
         
         $deuda = $proveedorcc->getDeuda();
         $monto = $proveedorcc->getPagado();
         $apagar = $proveedorcc->getDeuda() - $proveedorcc->getPagado() ;
         $form = $this->createForm(ProveedorpagoType::class, $proveedorcc);
         $form->handleRequest($request); 
        
        if(!$proveedorcc){
            throw $this->createNotFoundException('CC de Proveedor  no encontrada');
        }
       
        if ($form->isSubmitted() && $form->isValid()) {
            
            
            $proveedorcc->setPagado($monto + $proveedorcc->getPagado());
            $em->flush();
            
            
             //CAJA
            $movimiento = new Movimiento();
            $movimiento->setTipo('PP');
            
            if ($tipo=="OTRO" || $tipo == null){
            $movimiento->setDescripcion('Pago a Proveedor: '.$proveedorcc->getProveedor()->getNombre());
            }
            
            if ($tipo=="PROFESOR"){
            $movimiento->setDescripcion('Pago a Profesor: '.$proveedorcc->getProveedor()->getNombre());
            }
            
            
            
            $movimiento->setUsuario($this->get('security.token_storage')->getToken()->getUser());
            $movimiento->setFecha(new \DateTime("now"));
            $monto2 = $proveedorcc->getPagado();
            $movimiento->setMonto($monto2-$monto);
            
            $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Rubro');
            
            if ($tipo=="OTRO"|| $tipo == null){
            $rubro = $repository->findOneByNombre('PAGO A PROVEEDORES');
            
            if(!$rubro){
                $rubro = new Rubro();
                $rubro->setNombre('PAGO A PROVEEDORES');
                $rubro->setTipo('D');
                $rubro->setIsActive(1);
                $em->persist($rubro);
                $em->flush(); 
                $movimiento->setRubro($rubro);
            }else{
                $movimiento->setRubro($rubro);}
            
            
            }
            
            if ($tipo=="PROFESOR"){
            $rubro = $repository->findOneByNombre('Pago Sueldos A Profesores');
            
              if(!$rubro){
                $rubro = new Rubro();
                $rubro->setNombre('Pago Sueldos A Profesores');
                $rubro->setTipo('D');
                $rubro->setIsActive(1);
                $em->persist($rubro);
                $em->flush(); 
                $movimiento->setRubro($rubro);
            }else{
                $movimiento->setRubro($rubro);}
            
            }
            
            
    
                
            
            $em->persist($movimiento);
            $em->flush(); 
       
            
            
            $this->addFlash('success', 'La cc de proveedor ha sido modificada');
            return $this->redirectToRoute('cya_proveedorcc_index');
            
        }
       
      
       
       
        return $this->render('CYAYogaBundle:Proveedorcc:pago.html.twig', 
        array(
            // 'idelegido'=>$idelegido,
            // 'proveedores'=>$proveedores,
            // 'proveedorcc' => $proveedorcc,
            'monto'=>$monto,
            'deuda'=> $deuda,
            'apagar'=> $apagar,
            'form' => $form->createView()));
   
}
    
}
