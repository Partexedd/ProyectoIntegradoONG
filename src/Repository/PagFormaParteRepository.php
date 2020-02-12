<?php

namespace App\Repository;

use App\Entity\PagFormaParte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PagFormaParte|null find($id, $lockMode = null, $lockVersion = null)
 * @method PagFormaParte|null findOneBy(array $criteria, array $orderBy = null)
 * @method PagFormaParte[]    findAll()
 * @method PagFormaParte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagFormaParteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PagFormaParte::class);
    }

    // /**
    //  * @return PagFormaParte[] Returns an array of PagFormaParte objects
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
    public function findOneBySomeField($value): ?PagFormaParte
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
