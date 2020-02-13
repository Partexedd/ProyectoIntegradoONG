<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\OneToMany(targetEntity="App\Entity\pagMirant", mappedBy="edicion")
     */
    private $edicion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $trailer;

    public function __construct()
    {
        $this->edicion = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|pagMirant[]
     */
    public function getEdicion(): Collection
    {
        return $this->edicion;
    }

    public function addEdicion(pagMirant $edicion): self
    {
        if (!$this->edicion->contains($edicion)) {
            $this->edicion[] = $edicion;
            $edicion->setEdicion($this);
        }

        return $this;
    }

    public function removeEdicion(pagMirant $edicion): self
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

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getTrailer(): ?string
    {
        return $this->trailer;
    }

    public function setTrailer(string $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }
}
