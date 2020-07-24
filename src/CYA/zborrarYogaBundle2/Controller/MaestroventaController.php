
<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use CYA\YogaBundle\Entity\Maestroventa;
use CYA\YogaBundle\Form\MaestroventaType;
use CYA\YogaBundle\Entity\Usuario;
use CYA\YogaBundle\Entity\Alumnocc;
use CYA\YogaBundle\Entity\AlumnoccType;
use CYA\YogaBundle\Form\UsuarioType;
use CYA\YogaBundle\Entity\Movimiento;
use CYA\YogaBundle\Form\MovimientoType;

class MaestroventaController extends Controller
{
    public function addAction(Request $request)
    {   
        $maestroventa = new Maestroventa();
        $form = $this->createForm(MaestroventaType::class, $maestroventa);
        $form->handleRequest($request);
        
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Usuario');
        $query = $repository->createQueryBuilder('u')
            ->where('u.isActive = :rol')
            ->setParameter('rol', 1)
            ->getQuery();
        $usuarios = $query->getResult();
        $usuarioQuery = $request->get('usuario'); 
        
        if ($form->isSubmitted() && $form->isValid())
        {
            
            
                $em = $this->getDoctrine()->getManager();
                $em->persist($maestroventa);
                $em->flush();
                $codigo = $maestroventa->getId();
                $total  = $maestroventa->getTotal();
                $this->addFlash('success', 'Se generó la venta número: '.$codigo.' por un total de: $'.$total);
                
                
                /*actualiza el detalle con el maestro*/
                $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Detalleventa');
                $query = $repository->createQueryBuilder('m')
                ->where('m.maestroventa is NULL')
                ->getQuery();
                $detalleventa = $query->getResult();
        
                $producoment = null;
                
                foreach($detalleventa as $det)
                {
                    $det->setMaestroventa($maestroventa);
                    $producoment = $producoment . ' | '.  $det->getNombreproducto();
               
                }
                
                     
                /*GRABA EN LA CAJA*/
                $tipo = $maestroventa->getTipopago();
                
                if($tipo == 'CO')
                {
                        $movimiento = new Movimiento();
                        $movimiento->setUsuario($this->get('security.token_storage')->getToken()->getUser());
                        $movimiento->setTipo('VP');
                        $movimiento->setFecha(new \DateTime("now"));
                        $movimiento->setMonto($total);
                        $movimiento->setDescripcion($producoment);
                        $movimiento->setMaestroventa($maestroventa);
                        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Rubro');
                        $rubro = $repository->findOneByNombre('venta de productos');
                        $movimiento->setRubro($rubro);
                        
                        $em->persist($movimiento);
                        $em->flush(); 
                        $this->addFlash('success', 'Se actualizó la Caja +$'.$total);
                     
                }
                
                /*GRABA EN LA CC*/
                if($tipo == 'CC')
                {
                
                      if(empty($usuarioQuery))
                      {
                            $this->addFlash('', 'Si vende por cuenta corriente, debe elegir un usuario');
                      return $this->redirectToRoute('cya_maestroventa_add');
                      }
                        
                        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Usuario');
                        $usuario = $repository->findOneById($usuarioQuery);
                        
                    $estadouser = $usuario->getIsActive();
                    
                    if ( $estadouser == 0)
                    {
                         $this->addFlash('success', 'Este usuario se encuentra inactivo, imposible realizar la venta en cuenta');
                         return $this->redirectToRoute('cya_maestroventa_add');
                    }
                        
                        $alumnocc = new Alumnocc();
                        $alumnocc->setUsuario($usuario);
                        $alumnocc->setFechavencimiento(new \DateTime("now"));
                        $alumnocc->setFechamodificacion(new \DateTime("now"));
                        $alumnocc->setFechacreacion(new \DateTime("now"));
                        $alumnocc->setPagado(0);
                        $alumnocc->setMes('VTA. PRODUCTO');
                        $alumnocc->setBonificacion(0);
                        $alumnocc->setTipo('VP');
                        $alumnocc->setDeuda($total);
                        $alumnocc->setMaestroventa($maestroventa);
                        $alumnocc->setComentario($producoment);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($alumnocc);
                        $em->flush();
                      
                      $this->addFlash('success', 'Se actualizó la Cuenta Corriente de '. $usuario->getNombreCompleto());
              }
                
                
                
                return $this->redirectToRoute('cya_detalleventa_add');
        }
         
        
        $saldo = 0;  
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Detalleventa');
        $query = $repository->createQueryBuilder('m')
        ->where('m.maestroventa is NULL')
        ->getQuery();
        $detalleventa = $query->getResult();

        foreach($detalleventa as $det)
        {
            $saldo = $saldo + $det->getPrecioproducto();
       
        }
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($detalleventa, $request->query->getInt('page', 1), 5);
         
         
        return $this->render('CYAYogaBundle:Maestroventa:add.html.twig', array('form' => $form->createView(),'usuarios' => $usuarios,'saldo' => $saldo,'pagination' => $pagination));
    }
   
    public function agregarAction($id, $cantidad, Request $request){
        
        //$id, es el id del prodcuto seleccionado desde una lista
        //$cantidad es la cantidad del producto que se quiere agregar.
        
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('CYAYogaBundle:Producto')->find($id);
        
        $auxiliarventa = new Auxiliarventaa();
        $auxiliarventa->setProducto($producto);
        $auxiliarventa->setCantidad($cantidad);
        $auxiliarventa->setMonto($cantidad * $producto->getPreciolista());
        $em->persist($auxiliarventa);
        $em->flush();
        
        $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Auxiliarventa');
        $auxiliares = $repository->findAll();
        
        return $this->render('CYAYogaBundle:Maestroventa:add.html.twig', array('form' => $form->createView(), 'auxiliares' => $auxiliares));
    }
    
}
