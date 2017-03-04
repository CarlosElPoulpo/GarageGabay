<?php

namespace AppBundle\Repository;


/**
 * PromotionNewRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PromotionNewRepository extends \Doctrine\ORM\EntityRepository
{
    // retourne les promos pour lesquelles la date du jour est comprise entre publicationDate et endDate
    public function findPromosToDisplay(){

        $qb = $this->createQueryBuilder('p');
        $qb->add('where', $qb->expr()->between(
                ':now',
                'p.startDate',
                'p.endDate'
            ))
            ->setParameters(array('now' => new \DateTimeImmutable()))
        ;

        return $qb
            ->getQuery()
            ->getResult()
            ;
    }
}