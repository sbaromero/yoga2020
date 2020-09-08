<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use CYA\YogaBundle\Entity\Usuario;
use CYA\YogaBundle\Entity\Tipocuota;
use CYA\YogaBundle\Entity\Alumnocc;
use CYA\YogaBundle\Entity\Auxiliarventa;
use CYA\YogaBundle\Form\UsuarioType;
use CYA\YogaBundle\Form\UsuarioeditType;
use CYA\YogaBundle\Form\UsuarioeditavatarType;
use CYA\YogaBundle\Form\UsuariopublicType;
use CYA\YogaBundle\Form\UsuariorapidoType;
use CYA\YogaBundle\Form\UsuariopassType;
use Symfony\Component\HttpFoundation\File\File;

class UsuarioController extends Controller
{
    
    public function imprimircuota2Action($id, $valorcuota,$mes,$cc, Request $request){    
       
      
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('CYAYogaBundle:Usuario')->find($id);
        
        $tipocuota = $usuario->gettipocuota()->getnombre();
       
        $fecha = new \DateTime("now");
        $alumno =   $usuario->getnombrecompleto();
        
        $horario = $em->getRepository('CYAYogaBundle:Usuario')->findOneByDni('horario');
        


        //cambiar el ticket
       
        $em = $this->getDoctrine()->getManager();
        $alumnocc = $em->getRepository('CYAYogaBundle:Alumnocc')->find($cc);
       
        if(!$alumnocc)
        {
            throw $this->createNotFoundException('CC no encontrada');
        }   
  
        $alumnocc->setTicket('Entr.');
      
        $em->persist($alumnocc);
        $em->flush();
        //termina cambiar ticket


        return $this->render('CYAYogaBundle:Usuario:imprimircuota.html.twig',
        array (
              'valorcuota' => $valorcuota,'tipocuota' => $tipocuota,
              'fecha'      => $fecha, 'alumno'=>$alumno, 'horario'=>$horario, 'mes'=> $mes
             ));
             
             
             
             
    }
    public function imprimircuotaAction($id, Request $request)
   {    
       
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('CYAYogaBundle:Usuario')->find($id);
        
        $tipocuota = $usuario->gettipocuota()->getnombre();
        $valorcuota =  $usuario->gettipocuota()->getvalor();
        $fecha = new \DateTime("now");
        $alumno =   $usuario->getnombrecompleto();
        
        $horario = $em->getRepository('CYAYogaBundle:Usuario')->findOneByDni('horario');
        
         
        
        
        return $this->render('CYAYogaBundle:Usuario:imprimircuota.html.twig',
        array (
              'valorcuota' => $valorcuota,'tipocuota' => $tipocuota,
              'fecha'      => $fecha, 'alumno'=>$alumno, 'horario'=>$horario
             ));
             
             
             
             
    }
    
    
    
    public function usuariorapidoAction(Request $request)
    {
        
        $usuario = new Usuario();
        
        $form = $this->createForm(UsuariorapidoType::class, $usuario);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $password = $form->get('password')->getData();
            
            $passwordConstraint = new Assert\NotBlank();
            $errorList = $this->get('validator')->validate($password, $passwordConstraint);
            
            if(count($errorList) == 0){
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($usuario, $password);
                $usuario->setPassword($encoded);
                

                
                $em = $this->getDoctrine()->getManager();
                
                $fechahoy = new \DateTime("now");
                $usuario->setFechanacimiento($fechahoy);
                $usuario->setFechaingreso($fechahoy);
                $usuario->setFechareingreso($fechahoy);
                $usuario->setRol('ROLE_USER');
                $usuario->setDireccion('-');
                $usuario->setCiudad('-');
                $usuario->setTelefono('-');
                $usuario->setIsActive(1);
                $usuario->setMail('nombre@empresa');
                $em->persist($usuario);
                $em->flush();
                
                $this->crearCuentaCorriente($usuario, 'add');
                $this->addFlash('success', 'El usuario ha sido creado, recuerde completar luego todos los datos');
                //$this->procesarCuentas();
                
                return $this->redirectToRoute('cya_usuario_index');
            }else{
                $errorMessege = new FormError($errorList[0]->getMessage());
                $form->get('password')->addError($errorMessege);
            }
        }
        
        return $this->render('CYAYogaBundle:Usuario:usuariorapido.html.twig', array('form' => $form->createView()));
    }
    
    
    public function inicioAction()
    {
        
             /* totclases*/
            $em = $this->getDoctrine()->getManager();
           /* $dql = "SELECT u FROM CYAYogaBundle:Usuario u WHERE u.id > 0";
            $dql = $dql . "AND u.isActive = 1";
            $dql = $dql . "AND u.tipocuota in (2,3,7,22,24,25,27)";
            $dql = $dql . "AND u.tipocuota = 1";*/
            
              $dql = "SELECT u,w FROM CYAYogaBundle:Usuario u join CYAYogaBundle:Tipocuota w WHERE u.tipocuota = w.id ";
             $dql = $dql . "AND u.isActive = 1";
             $dql = $dql . "AND u.tipocuota = w.id ";
             $dql = $dql . "AND w.escurso = 0"; 
            
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidada=$pagination->getTotalItemCount();
            $totclases=(string)$cantidada;
            
            
               /* totclases2*/
            $em = $this->getDoctrine()->getManager();
/*            $dql = "SELECT u FROM CYAYogaBundle:Usuario u WHERE u.id > 0";
            $dql = $dql . "AND u.isActive = 1";
            $dql = $dql . "AND u.tipocuota  in (4,5,6,8,9,14,15,17,18,21,26,28,29,30,31)";*/
            
            $dql = "SELECT u,w FROM CYAYogaBundle:Usuario u join CYAYogaBundle:Tipocuota w WHERE u.tipocuota = w.id ";
            $dql = $dql . "AND u.isActive = 1";
            $dql = $dql . "AND u.tipocuota = w.id ";
            $dql = $dql . "AND w.escurso = 1"; 
            
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidada=$pagination->getTotalItemCount();
            $totclases2=(string)$cantidada;
            
               
         
            /* Usuarios*/

            $dql = "SELECT u,w FROM CYAYogaBundle:Usuario u join CYAYogaBundle:Tipocuota w WHERE u.tipocuota = w.id ";
            $dql = $dql . "AND u.isActive = 1";
            $dql = $dql . "AND u.tipocuota = w.id ";
            $dql = $dql . "AND w.escurso = 2"; 
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidada=$pagination->getTotalItemCount();
            $totclases3=(string)$cantidada;  
            
            
            
            
            
            /* totclases3*/
            $em = $this->getDoctrine()->getManager();
            /*$dql = "SELECT u FROM CYAYogaBundle:Usuario u WHERE u.id > 0";
            $dql = $dql . "AND u.isActive = 1";
            $dql = $dql . "AND u.tipocuota not in (2,3,7,22,24,25,27,4,5,6,8,9,14,15,17,18,21,26,28,29,30,31)";*/
            
             $dql = "SELECT u,w FROM CYAYogaBundle:Usuario u join CYAYogaBundle:Tipocuota w WHERE u.tipocuota = w.id ";
             $dql = $dql . "AND u.isActive = 1";
             $dql = $dql . "AND u.tipocuota = w.id ";
            // $dql = $dql . "AND w.escurso = 1"; 
            
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidada=$pagination->getTotalItemCount();
            $usuariosa=(string)$cantidada;
     
            
            
            
           
            $dql = "SELECT u FROM CYAYogaBundle:Usuario u WHERE u.id > 0";
            $dql = $dql . "AND u.isActive = 0";
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidadi=$pagination->getTotalItemCount();
            $usuariosi=(string)$cantidadi;
            
            $usuariost=(string)($cantidadi+$cantidada);
            
            
            /*productos*/
            $dql = "SELECT u FROM CYAYogaBundle:Producto u WHERE u.id > 0";
            $dql = $dql . "AND u.isActive = 1";
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidad2=$pagination->getTotalItemCount();
            $productos=(string)$cantidad2;
            
            /*lockers*/
            $dql = "SELECT u FROM CYAYogaBundle:Lockersocio u WHERE u.id > 0";
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidad2=$pagination->getTotalItemCount();
            $lockers=(string)$cantidad2;
            
            /*lockers libres*/
            $dql = "SELECT u FROM CYAYogaBundle:Locker u WHERE u.id > 0";
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidad3=$pagination->getTotalItemCount() - $cantidad2 ;
            
            $lockerlibres=(string)$cantidad3;
            
            
            
           /*saldo*/ 
            $saldo = 0;  
            $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Producto');
            $query = $repository->createQueryBuilder('m')
            ->where('m.isActive = 1')
            ->getQuery();
            $detalleventa = $query->getResult();
    
            foreach($detalleventa as $det)
            {
                if ($det->getTipoProducto()->getDescripcion()<> 'Administración'){
                $saldo = $saldo + ($det->getPreciolista() * $det->getStock());
                }
            }
                $saldo= (string) $saldo;
                
            
           
           
           
            /*caja*/
            
                 
         
            
        $saldoc = 0;  

        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Movimiento');
        $query = $repository->createQueryBuilder('m')
        ->orderBy('m.fecha', 'DESC')
        ->getQuery();
        $movimientos = $query->getResult();

        foreach($movimientos as $mov){
            if($mov->getRubro()->getTipo() == 'D'){
                $saldoc = $saldoc - $mov->getMonto();
            }else{
                $saldoc = $saldoc + $mov->getMonto();
            }
        }
            
             /*ctacte*/
      
        $dql = "SELECT a FROM CYAYogaBundle:Alumnocc a WHERE a.usuario in (SELECT u FROM CYAYogaBundle:Usuario u WHERE u.isActive = 1) ";
        $alumnoccs = $em->createQuery($dql); 
        $alumnoccs2 =  $alumnoccs->getResult();
        $pagados = 0;
        $deudas = 0;
        $bonificaciones = 0;
        $contador = 0;
        foreach($alumnoccs2 as $alu)
        {
            
           $pagados = $pagados +  $alu->getPagado();
           $deudas = $deudas + $alu->getDeuda();
           $bonificaciones = $bonificaciones + $alu->getBonificacion();
           $contador=$contador+1;
            
        }
        
        $saldocc = $pagados + $bonificaciones -  $deudas;
        $pagados = $pagados + $bonificaciones;
       

           
               return $this->render('CYAYogaBundle:Usuario:home.html.twig',
               array ('deudas' => $deudas,
              'pagados' =>$pagados,
              'saldocc' =>$saldocc,
              'saldoc' => $saldoc,
              'lockers' => $lockers,
              'lockerlibres' => $lockerlibres,
              'saldo' => $saldo,
              'usuariosa' => $usuariosa,
              'totclases' => $totclases,
              'totclases2' => $totclases2,
              'totclases3' => $totclases3,
              'usuariosi' => $usuariosi,
              'usuariost' => $usuariost,
              'productos' => $productos ));
       
           } 
    
    public function homeAction()
    {
        $rol = $this->get('security.token_storage')->getToken()->getUser()->getRol();
        if ($rol != 'ROLE_USER')
        {
               
             
            
            $this->procesarCuentas();
            
        /* totclases*/ 
            $em = $this->getDoctrine()->getManager();
         //   $dql = "SELECT u FROM CYAYogaBundle:Usuario u WHERE u.id > 0";
           $dql = "SELECT u,w FROM CYAYogaBundle:Usuario u join CYAYogaBundle:Tipocuota w WHERE u.tipocuota = w.id ";
           $dql = $dql . "AND u.isActive = 1";
           $dql = $dql . "AND u.tipocuota = w.id ";
           $dql = $dql . "AND w.escurso = 0"; 
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidada=$pagination->getTotalItemCount();
            $totclases= (string)$cantidada;
            
            
               /* totclases2 profesorados y posgrados*/
            $em = $this->getDoctrine()->getManager();
           // $dql = "SELECT u FROM CYAYogaBundle:Usuario u WHERE u.id > 0";
           // $dql = $dql . "AND u.isActive = 1";
           // $dql = $dql . "AND u.tipocuota  in (4,5,6,8,9,14,15,17,18,21,26,28,29,30,31,32,33,35,35,36,37,38,39,40) ";
           //  $dql = $dql . "AND (u.tipocuota  in (4,5,6,8,9,14,15,17,18,21,26) ";
           // $dql = $dql . "OR u.tipocuota  > 27)";
           
           $dql = "SELECT u,w FROM CYAYogaBundle:Usuario u join CYAYogaBundle:Tipocuota w WHERE u.tipocuota = w.id ";
           $dql = $dql . "AND u.isActive = 1";
           $dql = $dql . "AND u.tipocuota = w.id ";
           $dql = $dql . "AND w.escurso = 1"; 
             
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidada=$pagination->getTotalItemCount();
            $totclases2=(string)$cantidada;
           
                 
               /* totclases3 otros usuarios activos*/
            $em = $this->getDoctrine()->getManager();
           
           
            $dql = "SELECT u,w FROM CYAYogaBundle:Usuario u join CYAYogaBundle:Tipocuota w WHERE u.tipocuota = w.id ";
            $dql = $dql . "AND u.isActive = 1";
            $dql = $dql . "AND u.tipocuota = w.id ";
            $dql = $dql . "AND w.escurso = 2"; 
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidada=$pagination->getTotalItemCount();
            $totclases3=(string)$cantidada;  
            
           /* Usuarios*/
            $em = $this->getDoctrine()->getManager();
            $dql = "SELECT u FROM CYAYogaBundle:Usuario u WHERE u.id > 0";
            $dql = $dql . "AND u.isActive = 1";
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidada=$pagination->getTotalItemCount();
            $usuariosa=(string)$cantidada;
            
           
            $dql = "SELECT u FROM CYAYogaBundle:Usuario u WHERE u.id > 0";
            $dql = $dql . "AND u.isActive = 1";
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidadi=$pagination->getTotalItemCount();
            $usuariosi=(string)$cantidadi;
            
            $usuariost=(string)($cantidadi+$cantidada);
            
            /* Productos*/
            $dql = "SELECT u FROM CYAYogaBundle:Producto u WHERE u.id > 0";
            $dql = $dql . "AND u.isActive = 1";
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidad2=$pagination->getTotalItemCount();
            $productos=(string)$cantidad2;
            
              /* lockers*/
            $dql = "SELECT u FROM CYAYogaBundle:Lockersocio u WHERE u.id > 0 ";
            $users = $em->createQuery($dql); 
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($users);
            $cantidad2=$pagination->getTotalItemCount();
            $lockers=(string)$cantidad2;
            
            
            /*saldo*/
            $saldo = 0;  
            $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Producto');
            $query = $repository->createQueryBuilder('m')
            ->where('m.isActive = 1')
           ->getQuery();
            $detalleventa = $query->getResult();

            foreach($detalleventa as $det)
            {
              $saldo = 0;//$saldo + ($det->getPreciolista() * $det->getStock);
       
            }
            $saldo= (string) $saldo;
            
            
            
        /*caja*/
            
        $saldoc = 0;  

        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Movimiento');
        $query = $repository->createQueryBuilder('m')
        ->orderBy('m.fecha', 'DESC')
        ->getQuery();
        $movimientos = $query->getResult();

        foreach($movimientos as $mov){
            if($mov->getRubro()->getTipo() == 'D'){
                $saldoc = $saldoc - $mov->getMonto();
            }else{
                $saldoc = $saldoc + $mov->getMonto();
            }
        }
            
            
        /*ctacte*/
      
        $dql = "SELECT a FROM CYAYogaBundle:Alumnocc a WHERE a.usuario in (SELECT u FROM CYAYogaBundle:Usuario u WHERE u.isActive = 1) ";
        $alumnoccs = $em->createQuery($dql); 
        $alumnoccs2 =  $alumnoccs->getResult();
        $pagados = 0;
        $deudas = 0;
        $bonificaciones = 0;
        $contador = 0;
        foreach($alumnoccs2 as $alu)
        {
            
           $pagados = $pagados +  $alu->getPagado();
           $deudas = $deudas + $alu->getDeuda();
           $bonificaciones = $bonificaciones + $alu->getBonificacion();
           $contador=$contador+1;
            
        }
        
        $saldocc = $pagados + $bonificaciones -  $deudas;
        $pagados = $pagados + $bonificaciones;
      
            
            
           
        }
        
        else
       {
        $pagados = 0;
        $deudas = 0;
        $bonificaciones = 0;
        $contador = 0;
        $saldocc = 0;
        $pagados = 0;
        $saldoc=0;
        $usuariosa = 0;
        $totclases =0;
        $totclases2 =0;
        $totclases3 =0;
        $usuariosi =0;
        $usuariost =0;
        $productos =0;
        $lockers =0;
        $saldo =0;
         
       }
        
        
        return $this->render('CYAYogaBundle:Usuario:home.html.twig',
        array ('deudas' => $deudas,
              'pagados' =>$pagados,
              'saldocc' =>$saldocc,
              'saldoc' => $saldoc,
              'lockers' => $lockers,
              'saldo' => $saldo,
              'usuariosa' => $usuariosa,
              'totclases' => $totclases,
              'totclases2' => $totclases2,
              'totclases3' => $totclases3,
              'usuariosi' => $usuariosi,
              'usuariost' => $usuariost,
              'productos' => $productos ));
    }
    
    public function indexAction(Request $request)
    {
        
        $usuarioQuery = $request->get('usuariot'); 
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Usuario');
        $query = $repository->createQueryBuilder('u')
            ->where('1=1')
            ->getQuery();
        $usuariot = $query->getResult();

        $estadoQuery = $request->get('estado');
        $tcQuery = $request->get('tipocuota');
        

            $em = $this->getDoctrine()->getManager();
            $dql = "SELECT u FROM CYAYogaBundle:Usuario u WHERE u.id > 0";
        
            if ($estadoQuery == '1'){
                $dql = $dql . "AND u.isActive = 1";
                
            }
            
            if ($estadoQuery == '0'){
                $dql = $dql . "AND u.isActive = 0";
            }
            
            if(!empty($tcQuery)){
                $dql = $dql . " AND u.tipocuota = (SELECT t FROM CYAYogaBundle:Tipocuota t WHERE  t.id = " . $tcQuery .")";
            }
            
             if(!empty($usuarioQuery)){
                $dql = $dql . "AND u.id = " . $usuarioQuery;
            }
            
            
            $dql = $dql . " ORDER BY u.id DESC";
            
            $users = $em->createQuery($dql); 
        
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($users, $request->query->getInt('page' , 1),30);
        
        $em2 = $this->getDoctrine()->getManager();
      
        $tipocuotas = $em2->getRepository('CYAYogaBundle:Tipocuota')->findBy(array('activa'=>'1'), array('nombre' => 'ASC'));
        
        
        
        
        
        
       // $this->addFlash('notice', 'Presione sobre el ícono azul para inscribir al usuario a materias');
        
        return $this->render('CYAYogaBundle:Usuario:index.html.twig',array('pagination' => $pagination, 'tipocuotas' => $tipocuotas,'usuariot' => $usuariot));
        
    }
    
    public function addAction(Request $request)
    {
        $usuario = new Usuario();
        
        $form = $this->createForm(UsuarioType::class, $usuario);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $password = $form->get('password')->getData();
            
            $passwordConstraint = new Assert\NotBlank();
            $errorList = $this->get('validator')->validate($password, $passwordConstraint);
            
            if(count($errorList) == 0){
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($usuario, $password);
                $usuario->setPassword($encoded);
                
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($usuario);
                 $usuario->setIsActive(1);
                $em->flush();
                
                
                $this->crearCuentaCorriente($usuario, 'add');
                //$this->procesarCuentas();
                $this->addFlash('success', 'El usuario ha sido creado');
                
                return $this->redirectToRoute('cya_usuario_index');
            }else{
                $errorMessege = new FormError($errorList[0]->getMessage());
                $form->get('password')->addError($errorMessege);
            }
        }
        
        return $this->render('CYAYogaBundle:Usuario:add.html.twig', array('form' => $form->createView()));
    }

    public function viewAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Usuario');
    
        $usuario = $repository->find($id);
        
       if(!$usuario){
           $messageException = 'Usuario no encontrado';
          throw $this->createNotFoundException($messageException);
       }
        
        
        $fecha = $usuario->getFechanacimiento();
        $fechas = $fecha->format('Y-m-d');
      /*  printf($fechas);*/
        list($Y,$m,$d) = explode("-",$fechas);
        $edad = date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y ;
    
        
        return $this->render('CYAYogaBundle:Usuario:view.html.twig', array('usuario' => $usuario, 'edad'=> $edad));
    }
    
   public function editAction($id, Request $request)
   {    
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('CYAYogaBundle:Usuario')->find($id);
        $fechareingreso = $usuario->getFechareingreso();
        
        $form = $this->createForm(UsuarioeditType::class, $usuario);
      
        $form->handleRequest($request); 
        
        if(!$usuario){
            throw $this->createNotFoundException('Usuario no encontrado');
        }
       
        if ($form->isSubmitted() && $form->isValid()) {
            

            if ($usuario->getIsActive() == false) 
            {
                
                $tipocuota = $em->getRepository('CYAYogaBundle:Tipocuota')->find('23');
            
            if ($tipocuota)
                {
                $usuario->setTipocuota($tipocuota);
                $this->addFlash('notice', 'El usuario ha sido modificado en su tipo de cuota');
                }
                
            }
            
            $em->flush();
            $this->procesarCuentas();
            
            $this->addFlash('notice', 'El usuario '.$usuario->getNombrecompleto().' ha sido modificado');
            
            //return $this->redirectToRoute('cya_usuario_index');
            
        $fecha = $usuario->getFechanacimiento();
        $fechas = $fecha->format('Y-m-d');
     
         list($Y,$m,$d) = explode("-",$fechas);
         $edad = date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y ;
        
            return $this->render('CYAYogaBundle:Usuario:view.html.twig', array('edad'=>$edad,'usuario' => $usuario, 'form' => $form->createView()));
 
        }                                                                                                                   
       
        return $this->render('CYAYogaBundle:Usuario:edit.html.twig', array('usuario' => $usuario, 'form' => $form->createView()));
   }
   
   public function editpublicAction(Request $request)
   {    
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->get('security.token_storage')->getToken()->getUser();

        $form = $this->createForm(UsuariopublicType::class, $usuario);
        $form->handleRequest($request); 
        

        if ($form->isSubmitted() && $form->isValid()) {
            
            $password = $form->get('password')->getData();
            
            if(!empty($password)){
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($usuario, $password);
                $usuario->setPassword($encoded);
            }else{
                $recoverPass = $this->recoverPass($id);
                $usuario->setPassword($recoverPass[0]['password']); 
            }

            $em->flush();
            
            $this->addFlash('success', 'El usuario ha sido modificado');
            
            return $this->render('CYAYogaBundle:Usuario:home.html.twig');
        }
       
        return $this->render('CYAYogaBundle:Usuario:editpublic.html.twig', array('usuario' => $usuario, 'form' => $form->createView()));
   }
   
   
   public function editavatarAction($id, Request $request)
   {    
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('CYAYogaBundle:Usuario')->find($id);
     
        
        if ($usuario->getBrochure()!= null){
        $usuario->setBrochure(new File('web/uploads/brochures'.'/'.$usuario->getBrochure()));
        }
        
       
        $form = $this->createForm(UsuarioeditavatarType::class, $usuario);
        $form->handleRequest($request); 
        
        if(!$usuario){
            throw $this->createNotFoundException('Usuario no encontrado');
        }
       
        if ($form->isSubmitted() && $form->isValid()) {
            

         if ($usuario->getBrochure()!= null){
         
            
            $file = $usuario->getBrochure();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                'web/uploads/brochures',
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $usuario->setBrochure($fileName);
             
         }
             
             
            $em->flush();

            $this->addFlash('success', 'El AVATAR del usuario '.$usuario->getNombrecompleto().' ha sido modificado');
            
            return $this->render('CYAYogaBundle:Usuario:editavatar.html.twig', array('usuario' => $usuario, 'form' => $form->createView()));
        }                                                                                                                   
       
        return $this->render('CYAYogaBundle:Usuario:editavatar.html.twig', array('usuario' => $usuario, 'form' => $form->createView()));
   }
   
   
  
   
   
    private function procesarCuentas(){
        
      $fechahoy = new \DateTime("now");
  
    // $fechahoy = new \DateTime("2017".'-'."08".'-02'.' 00:00:00');
     $contador = 1;
     $acum = 0;
     while ($contador > 0){
        $contador = 0;
        
        $lock = "Casillero";
        $asoc = "Asociación";
        
        //obtiene valor locker
        $repolocker = $this->getDoctrine()->getRepository('CYAYogaBundle:Tipocuota');
        $querylocker = $repolocker->createQueryBuilder('l')
            ->where('l.nombre = :valor')
            ->setParameter('valor', $lock)
            ->getQuery();
            
        $locker = $querylocker->getOneOrNullResult();
        
       
        if ($locker){
        $valorLocker =   $locker->getValor();
        }
        else
        {$valorLocker = 0;}
        
        
        //obtiene valor Asoc
        $repoasoc = $this->getDoctrine()->getRepository('CYAYogaBundle:Tipocuota');
        $queryasoc = $repoasoc->createQueryBuilder('l')
            ->where('l.nombre = :valor')
            ->setParameter('valor', $asoc)
            ->getQuery();
            
        $asociacion = $queryasoc->getOneOrNullResult();
        
         if ($asociacion){
         $valorAsoc =   $asociacion->getValor();
        }
        else
        {$valorAsoc = 0;}
        
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Usuario');
        $query = $repository->createQueryBuilder('u')
            ->where('u.isActive = 1')
            ->andWhere("u.rol = 'ROLE_USER'")
            //->andWhere("u.id = 65") //borrar
            
            ->getQuery();
        
        $usuarios = $query->getResult();
        $em = $this->getDoctrine()->getManager();
        foreach($usuarios as $us){
            
          //  $this->addFlash('mensaje', $us->getnombrecompleto());
            
            if($us->getTipocuota()->getValor() > 0 || $us->gethaveLocker() == true || $us->gethaveAsoc() == true  ) 
            {
                $generacc = 0;
                $tienecuenta = 0 ;
                $nogenerar = 0;
                $alumnoccs = $us->getAlumnoccs();
                
                $vencimiento = new \DateTime('2000-01-01 00:00:00');
                foreach($alumnoccs as $ccs)
                {
                     $tienecuenta = 1; //tiene al menos 1 cc
                   
                   //  $this->addFlash('mensaje', $ccs->getFechavencimiento()->format('Y-m-d H:i:s'));
                    
                    if($ccs->getFechavencimiento() >=  $fechahoy 
                    && $ccs->getmes() <> 'CC NORMAL' 
                    && $ccs->getmes() <> 'VTA. PRODUCTO'
                    && $ccs->getcomentario() <> 'CC ELIMINADA')
            
                    {
                         $generacc  =1;  //la fecha vencimiento es mayor a hoy, no hay que generar
                         $nogenerar =1;
                         
                    }
                    
                   
                     //asigna la fecha de vencimiento de la ultima cuota
                     if ($ccs->getmes() <> 'CC NORMAL' 
                     && $ccs->getmes() <> 'VTA. PRODUCTO'
                     && $ccs->getcomentario() <> 'CC ELIMINADA' ) 
                     {
                        $vencimiento = $ccs->getFechavencimiento();
                        
                       //NO GENERA ANTES DE REINGRESO
                        if ($vencimiento < $us->getFechareingreso())
                        {
                             
                             $mes = $us->getFechareingreso();
                             $vencimiento = $mes;
                             $mes = substr((string)$vencimiento->format('d/M/Y'), 3, 3);  
                             $mescorto= substr((string)$vencimiento->format('d/m/Y'), 3, 2);
                             $anio= substr((string)$vencimiento->format('d/m/Y'), 6, 4);
                             //  $this->addFlash('mensaje', $vencimiento);
                            
                             $vencimiento = new \DateTime($anio.'-'.$mes.'-01'.' 00:00:00');
                        }
                     
                        //NO GENERA ANTES DE REINGRESO
                        
              
                       
                     }
                 
                 
                 
                }
                
                if ($generacc == 0 &&  $tienecuenta == 0) // aun no tiene cuenta
                {
                    
                    $vencimiento =  $us->getFechareingreso();
                    $this->crearCuentaCorriente($us, 'edit');
                    break;
                    
                }
                 
           
                 
                 date_add($vencimiento, date_interval_create_from_date_string ('1 month'));
                 
        
                 
                 $mes = $vencimiento;
                 $mes = substr((string)$vencimiento->format('d/M/Y'), 3, 3);  
                 $mescorto= substr((string)$vencimiento->format('d/m/Y'), 3, 2);
                 $anio= substr((string)$vencimiento->format('d/m/Y'), 6, 4);
                 //  $this->addFlash('mensaje', $vencimiento);
                
                 $vencimiento = new \DateTime($anio.'-'.$mes.'-01'.' 00:00:00');
                
                
                 switch ($mes) 
                 {
                  case "Feb": 
                  $mes = 'ENERO/'.$anio;
                  break;
                  case "Mar":
                  $mes = "FEBRERO/".$anio;
                  break;
                  case "Apr":
                  $mes = "MARZO/".$anio;
                  break;
                  case "May":
                  $mes = "ABRIL/".$anio;
                  break;
                  case "Jun":
                  $mes = "MAYO/".$anio;
                  break;
                  case "Jul":
                  $mes = "JUNIO/".$anio;
                  break;
                  case "Aug":
                  $mes = "JULIO/".$anio;
                  break;
                  case "Sep":
                  $mes = "AGOSTO/".$anio;
                  break;
                  case "Oct":
                  $mes = "SEPTIEMBRE/".$anio;
                  break;
                  case "Nov":
                  $mes = "OCTUBRE/".$anio;
                  break;
                  case "Dec":
                  $mes = "NOVIEMBRE/".$anio;
                  break;
                  case "Jan":
                  $anio = $anio - 1;       
                  $mes = "DICIEMBRE/".$anio;
                  break;
                  }
                
                 
                if (($generacc == 0 && $tienecuenta == 0)  || ($nogenerar == 0   && $tienecuenta == 1)   )
                {
                    
                    if ($us->gethaveLocker() == true){
                        
                        $xlocker = $valorLocker;
                         
                    }else{
                        
                        $xlocker = 0;
                    }
                    
                     if ($us->gethaveAsoc() == true){
                        $xasoc = $valorAsoc;
                    }else{
                        $xasoc = 0;
                    }
                    
                    $dupli =  $this->verificaduplicados($us, $mes);
                    
                    if (!$dupli){
                    $alumnocc = new Alumnocc();
                    $alumnocc->setUsuario($us);
                    $alumnocc->setFechavencimiento($vencimiento);
                    $alumnocc->setFechamodificacion(new \DateTime("now"));
                    $alumnocc->setFechacreacion(new \DateTime("now"));
                    $alumnocc->setPagado(0);
                    $alumnocc->setBonificacion(0);
                    $alumnocc->setTipo('PC');
                    $alumnocc->setDeuda($us->getTipocuota()->getValor() + $xlocker + $xasoc);
                    $alumnocc->setMes($mes); 
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($alumnocc);
                    $em->flush(); 
                    $contador ++;
                    }
                    
                }
            }
        }
        
        if ($contador > 0){
            $acum= $acum+ $contador;

            
        }
       }//while
       
        $mensaje = 'Se acaban de generar ' . $acum . ' cuotas de usuario nuevas por vencimientos de cuotas del día de hoy.';
           if ($this->get('security.token_storage')->getToken()->getUser()->getRol() != 'ROLE_USER' && $acum >= 1 ){
                $this->addFlash('notice', $mensaje);
            }
   
   
    //busqueda de cuotas vencidas
    
    
     //obtiene valor CUOTAS//////////////////////////////////////////////////////////////////
        $cuotasactivas = $this->getDoctrine()->getRepository('CYAYogaBundle:Tipocuota');
        $querycuotasactivas = $repoasoc->createQueryBuilder('l')
            ->where('l.activa = :valor')
            ->setParameter('valor', '1')
            ->getQuery();
            
        $arraycuotas = $querycuotasactivas->getResult();
        foreach($arraycuotas as $usa){
   
           if ($usa->getFechavenc() <  $fechahoy &&$usa->getFechavenc() != null ){
            
            $mensaje = 'Se venció la fecha de: ' . strtoupper($usa->getNombre()). '. Debe ingresar al tipo de cuota y proponer un nuevo VALOR y una nueva FECHA DE VENCIMIENTO';
            $this->addFlash('notice', $mensaje);
                                            }
            }
   
   
   
    }
    
    
    private function crearCuentaCorriente($usuario, $tipo)
    {
        // $this->corregirvencimientos();
        
         
        if ($usuario->getTipocuota()->getValor() > 0 && $usuario->getRol() == 'ROLE_USER' && $usuario->getIsActive() == true){
          //  $vencimiento = new \DateTime("now");
          //  if($tipo == 'edit'){
          
    

                $vencimiento = $usuario->getFechareingreso();
               
            
           // }
           
           
          $aniodic= substr((string)$vencimiento->format('d/m/Y'), 6, 4);
          date_add($vencimiento, date_interval_create_from_date_string('1 month'));
            
 
          $mes = $vencimiento;
          $mes = substr((string)$vencimiento->format('d/M/Y'), 3, 3);  
          $mescorto= substr((string)$vencimiento->format('d/m/Y'), 3, 2);
          $anio= substr((string)$vencimiento->format('d/m/Y'), 6, 4);
          //  $this->addFlash('mensaje', $vencimiento);
                
          $vencimiento = new \DateTime($anio.'-'.$mes.'-01'.' 00:00:00');
          
               
          switch ($mes) 
                 {
                  case "Feb":
                  $mes = 'ENERO/'.$anio;
                  break;
                  case "Mar":
                  $mes = "FEBRERO/".$anio;
                  break;
                  case "Apr":
                  $mes = "MARZO/".$anio;
                  break;
                  case "May":
                  $mes = "ABRIL/".$anio;
                  break;
                  case "Jun":
                  $mes = "MAYO/".$anio;
                  break;
                  case "Jul":
                  $mes = "JUNIO/".$anio;
                  break;
                  case "Aug":
                  $mes = "JULIO/".$anio;
                  break;
                  case "Sep":
                  $mes = "AGOSTO/".$anio;
                  break;
                  case "Oct":
                  $mes = "SEPTIEMBRE/".$anio;
                  break;
                  case "Nov":
                  $mes = "OCTUBRE/".$anio;
                  break;
                  case "Dec":
                  $mes = "NOVIEMBRE/".$anio;
                  break;
                  case "Jan":
                  $mes = "DICIEMBRE/".$aniodic;
                  break;
                  }
                
              //obtiene valor locker
        $lock = "Casillero";
        $asoc = "Asociación";
        
        $repolocker = $this->getDoctrine()->getRepository('CYAYogaBundle:Tipocuota');
        $querylocker = $repolocker->createQueryBuilder('l')
            ->where('l.nombre = :valor')
            ->setParameter('valor', $lock)
            ->getQuery();
            
        $locker = $querylocker->getOneOrNullResult();
       
       if ($locker){
        $valorLocker =   $locker->getValor();
       }else{$valorLocker=0;}
        
        
        //obtiene valor Asoc
        $repoasoc = $this->getDoctrine()->getRepository('CYAYogaBundle:Tipocuota');
        $queryasoc = $repoasoc->createQueryBuilder('l')
            ->where('l.nombre = :valor')
            ->setParameter('valor', $asoc)
            ->getQuery();
            
        $asociacion = $queryasoc->getOneOrNullResult();
        if ($asociacion){
        $valorAsoc =   $asociacion->getValor();
        }
        else{$valorAsoc=0;}
        
             if ($usuario->gethaveLocker() == true){
                        $xlocker = $valorLocker;
                    }else{
                        $xlocker = 0;
                    }
                    
                     if ($usuario->gethaveAsoc() == true){
                        $xasoc = $valorAsoc;
                    }else{
                        $xasoc = 0;
                    }
          
           $dupli =  $this->verificaduplicados($usuario, $mes);
       
           if (!$dupli) {
       
            $alumnocc = new Alumnocc();
            $alumnocc->setUsuario($usuario);
            $alumnocc->setFechavencimiento($vencimiento);
            $alumnocc->setFechamodificacion(new \DateTime("now"));
            $alumnocc->setFechacreacion(new \DateTime("now"));
            $alumnocc->setPagado(0);
            $alumnocc->setBonificacion(0);
            $alumnocc->setTipo('PC');
            $alumnocc->setDeuda($usuario->getTipocuota()->getValor()+ $xasoc + $xlocker);
            $alumnocc->setMes($mes); 
            $em = $this->getDoctrine()->getManager();
            $em->persist($alumnocc);
            $em->flush(); 
           }
           
            
        }
    
         
    }
    
   public function corregirvencimientos ()
    {
        
        
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Alumnocc');
        $query = $repository->createQueryBuilder('u')
            ->where("u.tipo = 'PC'")
            ->getQuery();
        

        $alumnoccs = $query->getResult();
        $em = $this->getDoctrine()->getManager();

                foreach($alumnoccs as $ccs)
                {
                  
                   $venci2 = $ccs->getFechavencimiento();    
                   $year  = $venci2;
                   $month = $venci2;
                   $year  = date('Y');
                   $month = date('m'); 
                   $venci  = new \DateTime("$year-$month-01");   
                   
                 //$venci2->modify('first day of this month');
                 //$venci  = new \DateTime('first day of thnewsviis month');   
                 //$venci=$venci2;     
                   
                   
                    $ccs->setFechavencimiento($venci);
                    $em->persist($ccs);
                    $em->flush(); 
                    
                  //$venci = $ccs->getFechavencimiento() ;
                  // $vencimiento = (string)$venci->format('d/m/Y');
                  // $this->addFlash('mensaje', $vencimiento);
                    
                }
                
               
                
        
    }



    
  
   public function construAction(Request $request)
    {
        return $this->render('CYAYogaBundle:Usuario:constru.html.twig');
    }

    
    
     public function editpassAction($id, Request $request)
   {    
        $em = $this->getDoctrine()->getManager();
              
        $usuario = $em->getRepository('CYAYogaBundle:Usuario')->find($id);
       
             


        
        $form = $this->createForm(UsuariopassType::class, $usuario);
    
        
        $form->handleRequest($request); 

        if ($form->isSubmitted() && $form->isValid()) 
        {
            
            
            $password = $form->get('password')->getData();
            
            $passwordConstraint = new Assert\NotBlank();
            $errorList = $this->get('validator')->validate($password, $passwordConstraint);
            
            if(count($errorList) == 0)
            {
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($usuario, $password);
                $usuario->setPassword($encoded);
                
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($usuario);
        
           
           
            $em->flush();
           
            $this->addFlash('success', 'El password usuario '.$usuario->getNombrecompleto().' ha sido modificado');
            
            }
            return $this->redirectToRoute('cya_usuario_index');
        }                                                                                                                   
      
        return $this->render('CYAYogaBundle:Usuario:editpass.html.twig', array('usuario' => $usuario, 'form' => $form->createView()));
    
   }
  
     public function generarcuotaAction()
   {
       $this->procesarCuentas();
       $this->addFlash('success', 'Generación de cuotas finalizada');  
       return $this->redirectToRoute('cya_alumnocc_index');
   }   
   
   
   public function verificaduplicados($usuario, $mes) {
     
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Alumnocc');
        $query = $repository->createQueryBuilder('u')
            ->where("u.tipo = 'PC'")
            ->andwhere('u.usuario = :user')
            ->setParameter('user',$usuario->getId())
            ->andwhere('u.mes = :mes')
            ->setParameter('mes',$mes)
            ->getQuery();

        return  $query->getResult();
     
}

}