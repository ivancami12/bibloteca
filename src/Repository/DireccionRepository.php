<?php

namespace App\Repository;

use App\Entity\Direccion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Direccion>
 *
 * @method Direccion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Direccion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Direccion[]    findAll()
 * @method Direccion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DireccionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Direccion::class);
    }

//    /**
//     * @return Direccion[] Returns an array of Direccion objects
//     */
}
