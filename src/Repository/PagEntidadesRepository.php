<?php

namespace App\Repository;

use App\Entity\PagEntidades;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PagEntidades|null find($id, $lockMode = null, $lockVersion = null)
 * @method PagEntidades|null findOneBy(array $criteria, array $orderBy = null)
 * @method PagEntidades[]    findAll()
 * @method PagEntidades[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagEntidadesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PagEntidades::class);
    }

    // /**
    //  * @return PagEntidades[] Returns an array of PagEntidades objects
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
    public function findOneBySomeField($value): ?PagEntidades
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
