<?php

namespace App\Repository;

use App\Entity\LibroUsuario;

use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LibroUsuario>
 *
 * @method LibroUsuario|null find($id, $lockMode = null, $lockVersion = null)
 * @method LibroUsuario|null findOneBy(array $criteria, array $orderBy = null)
 * @method LibroUsuario[]    findAll()
 * @method LibroUsuario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LibroUsuarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LibroUsuario::class);
    }

    /**
     * Devuelve la cantidad total de libros prestados que no han sido devueltos.
     *
     * @return int La cantidad de libros prestados sin devolución.
     */
    public function consultar_prestamos(): int
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            "SELECT COUNT(lu.id) AS cantidad_prestados
            FROM App\Entity\LibroUsuario lu
            WHERE lu.devolucion IS NULL"
        );

        // Retorna un solo valor que es el número de libros prestados sin devolución
        return (int) $query->getSingleScalarResult();
    }
}

