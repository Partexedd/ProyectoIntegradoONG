<?php

namespace App\Repository;

use App\Entity\Contactar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Contactar|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contactar|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contactar[]    findAll()
 * @method Contactar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contactar::class);
    }

    // /**
    //  * @return Contactar[] Returns an array of Contactar objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Contactar
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
