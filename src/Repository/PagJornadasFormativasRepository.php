<?php

namespace App\Repository;

use App\Entity\PagJornadasFormativas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PagJornadasFormativas|null find($id, $lockMode = null, $lockVersion = null)
 * @method PagJornadasFormativas|null findOneBy(array $criteria, array $orderBy = null)
 * @method PagJornadasFormativas[]    findAll()
 * @method PagJornadasFormativas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagJornadasFormativasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PagJornadasFormativas::class);
    }

    // /**
    //  * @return PagJornadasFormativas[] Returns an array of PagJornadasFormativas objects
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
    public function findOneBySomeField($value): ?PagJornadasFormativas
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
