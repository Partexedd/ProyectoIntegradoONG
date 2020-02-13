<?php

namespace App\Repository;

use App\Entity\PaginasONG;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PaginasONG|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaginasONG|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaginasONG[]    findAll()
 * @method PaginasONG[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaginasONGRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaginasONG::class);
    }

    // /**
    //  * @return PaginasONG[] Returns an array of PaginasONG objects
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
    public function findOneBySomeField($value): ?PaginasONG
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
