<?php

namespace App\Repository;

use App\Entity\Month;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Month|null find($id, $lockMode = null, $lockVersion = null)
 * @method Month|null findOneBy(array $criteria, array $orderBy = null)
 * @method Month[]    findAll()
 * @method Month[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonthRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Month::class);
    }

    // /**
    //  * @return Month[] Returns an array of Month objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Month
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
