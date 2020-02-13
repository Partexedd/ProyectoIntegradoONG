<?php

namespace App\Repository;

use App\Entity\EntDetalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EntDetalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntDetalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntDetalle[]    findAll()
 * @method EntDetalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntDetalleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EntDetalle::class);
    }

    // /**
    //  * @return EntDetalle[] Returns an array of EntDetalle objects
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
    public function findOneBySomeField($value): ?EntDetalle
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
