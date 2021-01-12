<?php

namespace App\Repository;

use App\Entity\RecomendacionPelicula;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RecomendacionPelicula|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecomendacionPelicula|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecomendacionPelicula[]    findAll()
 * @method RecomendacionPelicula[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecomendacionPeliculaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RecomendacionPelicula::class);
    }

    // /**
    //  * @return RecomendacionPelicula[] Returns an array of RecomendacionPelicula objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RecomendacionPelicula
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
