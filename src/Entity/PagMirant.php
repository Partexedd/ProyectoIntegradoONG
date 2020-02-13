<?php

namespace App\Entity;

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
     * @ORM\OneToOne(targetEntity="App\Entity\paginasONG", cascade={"persist", "remove"})
     */
    private $titCabecera;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $videoMirant;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PeliculasMirant", inversedBy="edicion")
     * @ORM\JoinColumn(nullable=false)
     */
    private $edicion;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\introduccionMirant", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $introduccion;

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

    public function getVideoMirant(): ?string
    {
        return $this->videoMirant;
    }

    public function setVideoMirant(?string $videoMirant): self
    {
        $this->videoMirant = $videoMirant;

        return $this;
    }

    public function getEdicion(): ?PeliculasMirant
    {
        return $this->edicion;
    }

    public function setEdicion(?PeliculasMirant $edicion): self
    {
        $this->edicion = $edicion;

        return $this;
    }

    public function getIntroduccion(): ?introduccionMirant
    {
        return $this->introduccion;
    }

    public function setIntroduccion(introduccionMirant $introduccion): self
    {
        $this->introduccion = $introduccion;

        return $this;
    }
}
