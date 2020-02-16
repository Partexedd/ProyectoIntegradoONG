<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\PersistentCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagMirantRepository")
 */
class PagMirant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titCabecera;

    /**
     * @ORM\Column(type="text")
     */
    private $titMirant;

    /**
     * @ORM\Column(type="text")
     */
    private $descripcionMirant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cartelMirant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $videoSpotMirant;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PeliculasMirant", mappedBy="edicion")
     */
    private $edicion;

    public function __construct()
    {
        $this->edicion = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitCabecera(): ?string
    {
        return $this->titCabecera;
    }

    public function setTitCabecera(string $titCabecera): self
    {
        $this->titCabecera = $titCabecera;

        return $this;
    }

    public function getTitMirant(): ?string
    {
        return $this->titMirant;
    }

    public function setTitMirant(string $titMirant): self
    {
        $this->titMirant = $titMirant;

        return $this;
    }

    public function getDescripcionMirant(): ?string
    {
        return $this->descripcionMirant;
    }

    public function setDescripcionMirant(string $descripcionMirant): self
    {
        $this->descripcionMirant = $descripcionMirant;

        return $this;
    }

    public function getCartelMirant(): ?string
    {
        return $this->cartelMirant;
    }

    public function setCartelMirant(string $cartelMirant): self
    {
        $this->cartelMirant = $cartelMirant;

        return $this;
    }

    public function getVideoSpotMirant(): ?string
    {
        return $this->videoSpotMirant;
    }

    public function setVideoSpotMirant(string $videoSpotMirant): self
    {
        $this->videoSpotMirant = $videoSpotMirant;

        return $this;
    }

    /**
     * @return Collection|peliculasMirant[]
     */
    public function getEdicion(): Collection
    {
        return $this->edicion;
    }

    public function addEdicion(peliculasMirant $edicion): self
    {
        if (!$this->edicion->contains($edicion)) {
            $this->edicion[] = $edicion;
            $edicion->setEdicion($this);
        }

        return $this;
    }

    public function removeEdicion(peliculasMirant $edicion): self
    {
        if ($this->edicion->contains($edicion)) {
            $this->edicion->removeElement($edicion);
            // set the owning side to null (unless already changed)
            if ($edicion->getEdicion() === $this) {
                $edicion->setEdicion(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->getTitMirant();
    }
}
