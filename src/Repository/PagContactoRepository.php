<?php

namespace App\Repository;

use App\Entity\PagContacto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PagContacto|null find($id, $lockMode = null, $lockVersion = null)
 * @method PagContacto|null findOneBy(array $criteria, array $orderBy = null)
 * @method PagContacto[]    findAll()
 * @method PagContacto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagContactoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PagContacto::class);
    }

    // /**
    //  * @return PagContacto[] Returns an array of PagContacto objects
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
    public function findOneBySomeField($value): ?PagContacto
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
