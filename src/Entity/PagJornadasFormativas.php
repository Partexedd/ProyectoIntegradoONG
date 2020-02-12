<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagJornadasFormativasRepository")
 */
class PagJornadasFormativas
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titCabecera;

    /**
     * @ORM\Column(type="boolean")
     */
    private $jornadaActiva;

    /**
     * @ORM\Column(type="string", length=75, nullable=true)
     */
    private $jornadaTit;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $jornadaText;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jornadaImg;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jornadaCartel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitCabecera(): ?string
    {
        return $this->titCabecera;
    }

    public function setTitCabecera(?string $titCabecera): self
    {
        $this->titCabecera = $titCabecera;

        return $this;
    }

    public function getJornadaActiva(): ?bool
    {
        return $this->jornadaActiva;
    }

    public function setJornadaActiva(bool $jornadaActiva): self
    {
        $this->jornadaActiva = $jornadaActiva;

        return $this;
    }

    public function getJornadaTit(): ?string
    {
        return $this->jornadaTit;
    }

    public function setJornadaTit(?string $jornadaTit): self
    {
        $this->jornadaTit = $jornadaTit;

        return $this;
    }

    public function getJornadaText(): ?string
    {
        return $this->jornadaText;
    }

    public function setJornadaText(?string $jornadaText): self
    {
        $this->jornadaText = $jornadaText;

        return $this;
    }

    public function getJornadaImg(): ?string
    {
        return $this->jornadaImg;
    }

    public function setJornadaImg(?string $jornadaImg): self
    {
        $this->jornadaImg = $jornadaImg;

        return $this;
    }

    public function getJornadaCartel(): ?string
    {
        return $this->jornadaCartel;
    }

    public function setJornadaCartel(?string $jornadaCartel): self
    {
        $this->jornadaCartel = $jornadaCartel;

        return $this;
    }
}
