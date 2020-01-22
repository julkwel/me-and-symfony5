<?php

namespace App\Repository;

use App\Entity\Developpeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Developpeur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Developpeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Developpeur[]    findAll()
 * @method Developpeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeveloppeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Developpeur::class);
    }

    // /**
    //  * @return Developpeur[] Returns an array of Developpeur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Developpeur
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
