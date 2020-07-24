<?php

namespace CYA\YogaBundle\Repository;

/**
 * CajaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CajaRepository extends \Doctrine\ORM\EntityRepository
{
    
       public function findLastId()
    {
         return  $this->createQueryBuilder('caja')
           
            ->setMaxResults(1)  
            ->orderBy('caja.id', 'DESC')
            ->getQuery()->getOneOrNullResult();
    
            
            
        //   return $this->createQueryBuilder('s')
        //     ->select('s, MAX(s.id) AS HIDDEN max_score')
        //     ->groupBy('s.id')
        //     ->orderBy('max_score', 'DESC');
        
    
    }  
}
