<?php

namespace App\Repository;

use App\Entity\IntroduccionMirant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method IntroduccionMirant|null find($id, $lockMode = null, $lockVersion = null)
 * @method IntroduccionMirant|null findOneBy(array $criteria, array $orderBy = null)
 * @method IntroduccionMirant[]    findAll()
 * @method IntroduccionMirant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntroduccionMirantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IntroduccionMirant::class);
    }

    // /**
    //  * @return IntroduccionMirant[] Returns an array of IntroduccionMirant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IntroduccionMirant
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
