<?php

namespace App\Repository;

use App\Entity\Quartiers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Quartiers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Quartiers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Quartiers[]    findAll()
 * @method Quartiers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuartiersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Quartiers::class);
    }

    // /**
    //  * @return Quartiers[] Returns an array of Quartiers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Quartiers
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
