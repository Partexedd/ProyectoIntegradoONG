<?php

namespace App\Repository;

use App\Entity\PagInicio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PagInicio|null find($id, $lockMode = null, $lockVersion = null)
 * @method PagInicio|null findOneBy(array $criteria, array $orderBy = null)
 * @method PagInicio[]    findAll()
 * @method PagInicio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagInicioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PagInicio::class);
    }

    // /**
    //  * @return PagInicio[] Returns an array of PagInicio objects
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
    public function findOneBySomeField($value): ?PagInicio
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
