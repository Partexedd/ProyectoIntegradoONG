<?php

namespace App\Repository;

use App\Entity\SpotInicio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SpotInicio|null find($id, $lockMode = null, $lockVersion = null)
 * @method SpotInicio|null findOneBy(array $criteria, array $orderBy = null)
 * @method SpotInicio[]    findAll()
 * @method SpotInicio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpotInicioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SpotInicio::class);
    }

    // /**
    //  * @return SpotInicio[] Returns an array of SpotInicio objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SpotInicio
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
