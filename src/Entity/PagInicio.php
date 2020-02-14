<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagInicioRepository")
 */
class PagInicio
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $titInicio;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $subtInicio;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $imagenInicio;

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

    public function getTitInicio(): ?string
    {
        return $this->titInicio;
    }

    public function setTitInicio(?string $titInicio): self
    {
        $this->titInicio = $titInicio;

        return $this;
    }

    public function getSubtInicio(): ?string
    {
        return $this->subtInicio;
    }

    public function setSubtInicio(?string $subtInicio): self
    {
        $this->subtInicio = $subtInicio;

        return $this;
    }

    public function getImagenInicio(): ?string
    {
        return $this->imagenInicio;
    }

    public function setImagenInicio(?string $imagenInicio): self
    {
        $this->imagenInicio = $imagenInicio;

        return $this;
    }
}
