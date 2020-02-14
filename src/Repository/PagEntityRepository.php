<?php

namespace App\Repository;

use App\Entity\PagEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PagEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method PagEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method PagEntity[]    findAll()
 * @method PagEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PagEntity::class);
    }

    // /**
    //  * @return PagEntity[] Returns an array of PagEntity objects
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
    public function findOneBySomeField($value): ?PagEntity
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
