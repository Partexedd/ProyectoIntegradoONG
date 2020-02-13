<?php

namespace App\Repository;

use App\Entity\Entidades;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Entidades|null find($id, $lockMode = null, $lockVersion = null)
 * @method Entidades|null findOneBy(array $criteria, array $orderBy = null)
 * @method Entidades[]    findAll()
 * @method Entidades[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntidadesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Entidades::class);
    }

    // /**
    //  * @return Entidades[] Returns an array of Entidades objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Entidades
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
