<?php

namespace App\Repository;

use App\Entity\Halfday;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Halfday|null find($id, $lockMode = null, $lockVersion = null)
 * @method Halfday|null findOneBy(array $criteria, array $orderBy = null)
 * @method Halfday[]    findAll()
 * @method Halfday[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HalfdayRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Halfday::class);
    }

    // /**
    //  * @return Halfday[] Returns an array of Halfday objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Halfday
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
