<?php

namespace App\Repository;

use App\Entity\Tabulator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tabulator|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tabulator|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tabulator[]    findAll()
 * @method Tabulator[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabulatorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tabulator::class);
    }

    // /**
    //  * @return Tabulator[] Returns an array of Tabulator objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tabulator
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
