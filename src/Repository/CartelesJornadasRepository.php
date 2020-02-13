<?php

namespace App\Repository;

use App\Entity\CartelesJornadas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CartelesJornadas|null find($id, $lockMode = null, $lockVersion = null)
 * @method CartelesJornadas|null findOneBy(array $criteria, array $orderBy = null)
 * @method CartelesJornadas[]    findAll()
 * @method CartelesJornadas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartelesJornadasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CartelesJornadas::class);
    }

    // /**
    //  * @return CartelesJornadas[] Returns an array of CartelesJornadas objects
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
    public function findOneBySomeField($value): ?CartelesJornadas
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
