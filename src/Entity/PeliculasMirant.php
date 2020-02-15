<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PeliculasMirantRepository")
 */
class PeliculasMirant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titPelicula;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $trailerPelicula;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fotoPelicula;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PagMirant", inversedBy="edicion")
     * @ORM\JoinColumn(nullable=false)
     */
    private $edicion;
    

    public function getId(): ?int
    {

        return $this->id;
    }

    public function getTitPelicula(): ?string
    {
        return $this->titPelicula;
    }

    public function setTitPelicula(?string $titPelicula): self
    {
        $this->titPelicula = $titPelicula;

        return $this;
    }

    public function getTrailerPelicula(): ?string
    {
        return $this->trailerPelicula;
    }

    public function setTrailerPelicula(?string $trailerPelicula): self
    {
        $this->trailerPelicula = $trailerPelicula;

        return $this;
    }

    public function getFotoPelicula(): ?string
    {
        return $this->fotoPelicula;
    }

    public function setFotoPelicula(?string $fotoPelicula): self
    {
        $this->fotoPelicula = $fotoPelicula;

        return $this;
    }

    public function getEdicion(): ?PagMirant
    {
        return $this->edicion;
    }

    public function setEdicion(?PagMirant $edicion): self
    {
        $this->edicion = $edicion;

        return $this;
    }

}
