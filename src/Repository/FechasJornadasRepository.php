<?php

namespace App\Repository;

use App\Entity\FechasJornadas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FechasJornadas|null find($id, $lockMode = null, $lockVersion = null)
 * @method FechasJornadas|null findOneBy(array $criteria, array $orderBy = null)
 * @method FechasJornadas[]    findAll()
 * @method FechasJornadas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FechasJornadasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FechasJornadas::class);
    }

    // /**
    //  * @return FechasJornadas[] Returns an array of FechasJornadas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FechasJornadas
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
