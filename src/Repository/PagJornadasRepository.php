<?php

namespace App\Repository;

use App\Entity\PagJornadas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PagJornadas|null find($id, $lockMode = null, $lockVersion = null)
 * @method PagJornadas|null findOneBy(array $criteria, array $orderBy = null)
 * @method PagJornadas[]    findAll()
 * @method PagJornadas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagJornadasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PagJornadas::class);
    }

    // /**
    //  * @return PagJornadas[] Returns an array of PagJornadas objects
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
    public function findOneBySomeField($value): ?PagJornadas
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
