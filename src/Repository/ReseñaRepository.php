<?php

namespace App\Repository;

use App\Entity\Reseña;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reseña>
 *
 * @method Reseña|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reseña|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reseña[]    findAll()
 * @method Reseña[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReseñaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reseña::class);
    }

//    /**
//     * @return Reseña[] Returns an array of Reseña objects
//     */
}
