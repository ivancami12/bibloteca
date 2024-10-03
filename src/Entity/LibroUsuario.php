<?php

namespace App\Entity;

use App\Repository\LibroUsuarioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LibroUsuarioRepository::class)]
class LibroUsuario
{
   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Usuario $usuario = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Libro $libro = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $prestamo = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $devolucion = null;

    // Getter y Setter para la propiedad id
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): static
    {
        $this->id = $id;

        return $this;
    }

    // Getter y Setter para la propiedad usuario
    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): static
    {
        $this->usuario = $usuario;

        return $this;
    }

    // Getter y Setter para la propiedad libro
    public function getLibro(): ?Libro
    {
        return $this->libro;
    }

    public function setLibro(?Libro $libro): static
    {
        $this->libro = $libro;

        return $this;
    }

    // Getter y Setter para la propiedad prestamo
    public function getPrestamo(): ?\DateTimeInterface
    {
        return $this->prestamo;
    }

    public function setPrestamo(?\DateTimeInterface $prestamo): static
    {
        $this->prestamo = $prestamo;

        return $this;
    }

    // Getter y Setter para la propiedad devolucion
    public function getDevolucion(): ?\DateTimeInterface
    {
        return $this->devolucion;
    }

    public function setDevolucion(?\DateTimeInterface $devolucion): static
    {
        $this->devolucion = $devolucion;

        return $this;
    }
}
