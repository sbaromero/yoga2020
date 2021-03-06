<?php

namespace CYA\YogaBundle\Repository;

/**
 * InscriptaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InscriptaRepository extends \Doctrine\ORM\EntityRepository
{ 
    public function findOneByUsuario($id)
    {
        return  $this->createQueryBuilder('inscripta')
            ->where('inscripta.usuario = :id')->setParameter('id', $id)
            ->getQuery()->getResult();
    
    }

    public function findOneByMateria($id)
    {
        return  $this->createQueryBuilder('inscripta')
            ->where('inscripta.materia = :id')->setParameter('id', $id)
            ->getQuery()->getResult();
    
    }


    public function findOneByMateriaAndUser($materia, $userid)
    {
        return  $this->createQueryBuilder('inscripta')
            ->where('inscripta.materia = :materia')->setParameter('materia', $materia)
            ->andWhere('inscripta.usuario = :userid')->setParameter('userid', $userid)
            ->getQuery()->getResult();
    
    }
   





}
