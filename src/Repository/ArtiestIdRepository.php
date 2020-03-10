<?php

namespace App\Repository;

use App\Entity\ArtiestId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ArtiestId|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArtiestId|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArtiestId[]    findAll()
 * @method ArtiestId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtiestIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArtiestId::class);
    }

    // /**
    //  * @return ArtiestId[] Returns an array of ArtiestId objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ArtiestId
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
