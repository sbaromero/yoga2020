<?php

namespace CYA\YogaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use CYA\YogaBundle\Entity\Tipocuota;
use CYA\YogaBundle\Entity\Cursosold;
use CYA\YogaBundle\Form\TipocuotaType;


class TipocuotaController extends Controller
{
    public function indexAction(Request $request)
    {
        
    $em = $this->getDoctrine()->getManager();
    $dql = "SELECT t.id,t.nombre, t.valor, t.escurso, COUNT(u.id) as cantidad, t.activa FROM CYAYogaBundle:Tipocuota t left join CYAYogaBundle:Usuario u 
    WHERE u.isActive = true 
    and t.activa = true 
    and u.tipocuota = t.id 
    group by t 
    ORDER BY t.escurso";
    $tipocuotas = $em->createQuery($dql);  
        

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $tipocuotas, $request->query->getInt('page' , 1),
            100
        );
        
        return $this->render('CYAYogaBundle:Tipocuota:index.html.twig', array('pagination' => $pagination, 'tipocuotas' => $tipocuotas));
    }
    
    public function addAction(Request $request)
    {
        $tipocuota = new Tipocuota();
        
        $form = $this->createForm(TipocuotaType::class, $tipocuota);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
                $em = $this->getDoctrine()->getManager();
                $em->persist($tipocuota);
                $em->flush();
                
                $this->addFlash('success', 'El tipo de cuota ha sido creado');
                
                return $this->redirectToRoute('cya_tipocuota_index');
        }
        
        return $this->render('CYAYogaBundle:Tipocuota:add.html.twig', array('form' => $form->createView()));
    }
    
    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $tipocuota = $em->getRepository('CYAYogaBundle:Tipocuota')->find($id);
        $form = $this->createForm(TipocuotaType::class, $tipocuota);
        $form->handleRequest($request); 
        
        if(!$tipocuota){
            throw $this->createNotFoundException('Tipo de cuota no encontrado');
        }
       
       
        if ($form->isSubmitted() && $form->isValid()) {
            
            
        $cuotaguion = $em->getRepository('CYAYogaBundle:Tipocuota')->find(23);
                    
        if ($tipocuota->getId() == $cuotaguion->getId())
            {
                $this->addFlash('error', 'No se puede modificar este tipo de cuota ');
                          
             }
            
            else //es cualquiera de las permitidas no guion
            {
            
             
               if ($tipocuota->getActiva()==0) //quiero desactivar la cuota
                {
                      $this->addFlash('notice', 'Se desactivó la cuota: '.$tipocuota->getNombre());
                      //Recorrer los alumnos y pasarlos a otra tabla
                      
                       $repository = $this->getDoctrine()->getRepository('CYAYogaBundle:Usuario');
                      $query = $repository->createQueryBuilder('u')
                      ->where('u.tipocuota = '.$tipocuota->getId())
                      ->getQuery();
                      $usuariot = $query->getResult();
                      
                    foreach($usuariot as $usu){ //elimino todos los usuarios de esa cuota
                     
                        //inserto los que se van a borrar en la tabla nueva TipoCuotaBorrada
                        
                        $em = $this->getDoctrine()->getManager();
                        $cursosold = new Cursosold();
                        $cursosold->setTipocuota ($tipocuota);
                        $cursosold->setUsuario ($usu);
                        $em->persist($cursosold);
                        $em->flush();
                      
                     
                     
                        $this->addFlash('notice', 'Se quitará de este tipo de cuota al usuario: '.$usu->getNombre());
                        $cuotaguion = $em->getRepository('CYAYogaBundle:Tipocuota')->find(23);
                        $usu->setTipocuota($cuotaguion);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($usu);
                        $em->flush(); 
                                               }
                      
              }
            
               $em->flush();
               $this->addFlash('success', 'Tipo de cuota modificada con éxito ');

            
            }
             
            return $this->redirectToRoute('cya_tipocuota_index');
        }
       
        return $this->render('CYAYogaBundle:Tipocuota:edit.html.twig', array('tipocuota' => $tipocuota, 'form' => $form->createView()));
    }
    
    
     public function deleteAction($id, Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('CYAYogaBundle:Tipocuota')->find($id);
       
        if(!$producto)
        {
            throw $this->createNotFoundException('Cuota no encontrada, reintente');
        }   
        
        
        if ($producto->getNombre()=='Asociación'){
            
         
        $successMessage = ' No se puede eliminar la Asociación';
        $this->addFlash('success', $successMessage); 
         return $this->redirectToRoute('cya_tipocuota_index');
        }
        
        if ($producto->getNombre()=='Locker'){
            
           $successMessage = ' No se puede eliminar la Locker';
        $this->addFlash('success', $successMessage); 
         return $this->redirectToRoute('cya_tipocuota_index');
        }

        try
        {
        
        $nombre = $producto->getNombre();
        $em->remove($producto);
        $em->flush();

        
        $successMessage = 'Tipo de cuota: '. $nombre.' eliminada';
        $this->addFlash('success', $successMessage);

        return $this->redirectToRoute('cya_tipocuota_index');
        
        }
        
        
       catch(\Exception $e)
       {
        $successMessage = 'Cuota '. $nombre.' no se puede eliminar, es probable que esté incluida en un usuario, 
        revise que ningun usuario la tenga';
        $this->addFlash('success', $successMessage); 
         return $this->redirectToRoute('cya_tipocuota_index');
       }
        
        
    }
    
    
    
}
