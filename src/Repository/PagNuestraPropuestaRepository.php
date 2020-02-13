<?php

namespace App\Repository;

use App\Entity\PagNuestraPropuesta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PagNuestraPropuesta|null find($id, $lockMode = null, $lockVersion = null)
 * @method PagNuestraPropuesta|null findOneBy(array $criteria, array $orderBy = null)
 * @method PagNuestraPropuesta[]    findAll()
 * @method PagNuestraPropuesta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagNuestraPropuestaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PagNuestraPropuesta::class);
    }

    // /**
    //  * @return PagNuestraPropuesta[] Returns an array of PagNuestraPropuesta objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PagNuestraPropuesta
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
