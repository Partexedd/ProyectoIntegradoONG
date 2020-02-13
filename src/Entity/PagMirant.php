<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\OneToOne(targetEntity="App\Entity\PaginasONG", cascade={"persist", "remove"})
     */
    private $titCabecera;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\peliculasMirant", mappedBy="edicion")
     */
    private $edicion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $videoMirant;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\IntroduccionMirant", cascade={"persist", "remove"})
     */
    private $introduccion;

    public function __construct()
    {
        $this->edicion = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitCabecera(): ?paginasONG
    {
        return $this->titCabecera;
    }

    public function setTitCabecera(?paginasONG $titCabecera): self
    {
        $this->titCabecera = $titCabecera;

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

    public function getVideoMirant(): ?string
    {
        return $this->videoMirant;
    }

    public function setVideoMirant(string $videoMirant): self
    {
        $this->videoMirant = $videoMirant;

        return $this;
    }

    public function getIntroduccion(): ?introduccionMirant
    {
        return $this->introduccion;
    }

    public function setIntroduccion(?introduccionMirant $introduccion): self
    {
        $this->introduccion = $introduccion;

        return $this;
    }
}
