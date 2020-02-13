<?php

namespace App\Repository;

use App\Entity\PagPropuesta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PagPropuesta|null find($id, $lockMode = null, $lockVersion = null)
 * @method PagPropuesta|null findOneBy(array $criteria, array $orderBy = null)
 * @method PagPropuesta[]    findAll()
 * @method PagPropuesta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagPropuestaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PagPropuesta::class);
    }

    // /**
    //  * @return PagPropuesta[] Returns an array of PagPropuesta objects
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
    public function findOneBySomeField($value): ?PagPropuesta
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
