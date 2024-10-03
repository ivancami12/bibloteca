<?php

namespace App\Entity;

use App\Repository\LibroRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LibroRepository::class)]
class Libro 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $titulo = null;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $autor = null;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $publicado = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $imagen = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $detalle = null;

    #[ORM\OneToMany(targetEntity: reseña::class, mappedBy: 'libros')]
    private Collection $id_reseña;

    public function __construct()
    {
        $this->id_reseña = new ArrayCollection();
    }

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

    // Getter y Setter para la propiedad titulo
    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(?string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    // Getter y Setter para la propiedad autor
    public function getAutor(): ?string
    {
        return $this->autor;
    }

    public function setAutor(?string $autor): static
    {
        $this->autor = $autor;

        return $this;
    }

    // Getter y Setter para la propiedad publicado
    public function getPublicado(): ?string
    {
        return $this->publicado;
    }

    public function setPublicado(?string $publicado): static
    {
        $this->publicado = $publicado;

        return $this;
    }

    // Getter y Setter para la propiedad imagen
    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(?string $imagen): static
    {
        $this->imagen = $imagen;

        return $this;
    }

    // Getter y Setter para la propiedad detalle
    public function getDetalle(): ?string
    {
        return $this->detalle;
    }

    public function setDetalle(?string $detalle): static
    {
        $this->detalle = $detalle;
        
        return $this;
    }

    /**
     * @return Collection<int, reseña>
     */
    public function getIdReseña(): Collection
    {
        return $this->id_reseña;
    }

    public function addIdReseA(reseña $idReseA): static
    {
        if (!$this->id_reseña->contains($idReseA)) {
            $this->id_reseña->add($idReseA);
            $idReseA->setLibros($this);
        }

        return $this;
    }

    public function removeIdReseA(reseña $idReseA): static
    {
        if ($this->id_reseña->removeElement($idReseA)) {
            // set the owning side to null (unless already changed)
            if ($idReseA->getLibros() === $this) {
                $idReseA->setLibros(null);
            }
        }

        return $this;
    }

}

