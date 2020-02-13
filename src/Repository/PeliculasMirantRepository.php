<?php

namespace App\Repository;

use App\Entity\PeliculasMirant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PeliculasMirant|null find($id, $lockMode = null, $lockVersion = null)
 * @method PeliculasMirant|null findOneBy(array $criteria, array $orderBy = null)
 * @method PeliculasMirant[]    findAll()
 * @method PeliculasMirant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PeliculasMirantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PeliculasMirant::class);
    }

    // /**
    //  * @return PeliculasMirant[] Returns an array of PeliculasMirant objects
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
    public function findOneBySomeField($value): ?PeliculasMirant
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
