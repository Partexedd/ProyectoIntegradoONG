<?php

namespace App\Repository;

use App\Entity\PonenteJornada;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PonenteJornada|null find($id, $lockMode = null, $lockVersion = null)
 * @method PonenteJornada|null findOneBy(array $criteria, array $orderBy = null)
 * @method PonenteJornada[]    findAll()
 * @method PonenteJornada[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PonenteJornadaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PonenteJornada::class);
    }

    // /**
    //  * @return PonenteJornada[] Returns an array of PonenteJornada objects
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
    public function findOneBySomeField($value): ?PonenteJornada
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
