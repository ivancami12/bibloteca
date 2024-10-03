<?php

namespace App\Entity;

use App\Repository\ReseñaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReseñaRepository::class)]
class Reseña
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usuario $usuario = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Libro $libro = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $contenido = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $publicado = null;

    #[ORM\ManyToOne(inversedBy: 'id_reseña')]
    private ?Libro $libros = null;

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

    // Getter y Setter para la propiedad contenido
    public function getContenido(): ?string
    {
        return $this->contenido;
    }

    public function setContenido(?string $contenido): static
    {
        $this->contenido = $contenido;

        return $this;
    }

    // Getter y Setter para la propiedad publicado
    public function getPublicado(): ?\DateTimeInterface
    {
        return $this->publicado;
    }

    public function setPublicado(?\DateTimeInterface $publicado): static
    {
        $this->publicado = $publicado;

        return $this;
    }

    public function getLibros(): ?Libro
    {
        return $this->libros;
    }

    public function setLibros(?Libro $libros): static
    {
        $this->libros = $libros;

        return $this;
    }
}
