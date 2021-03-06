<?php

namespace GarageBundle\Repository;

/**
 * NewCarRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewCarRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByType($type){
        $qb = $this->createQueryBuilder('c');

        $qb ->innerJoin('c.vehiculeType', 'vt')
            ->addSelect('vt')
            ->where('vt.name = :name')
            ->setParameter('name', $type)
        ;

        return $qb
            ->getQuery()
            ->getResult()
            ;
    }
}
