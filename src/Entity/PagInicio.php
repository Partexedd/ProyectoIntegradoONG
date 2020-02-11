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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titCabecera;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $videoConocenos;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txtQueHacemos;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $suplementoLink;

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

    public function getVideoConocenos(): ?string
    {
        return $this->videoConocenos;
    }

    public function setVideoConocenos(?string $videoConocenos): self
    {
        $this->videoConocenos = $videoConocenos;

        return $this;
    }

    public function getTxtQueHacemos(): ?string
    {
        return $this->txtQueHacemos;
    }

    public function setTxtQueHacemos(?string $txtQueHacemos): self
    {
        $this->txtQueHacemos = $txtQueHacemos;

        return $this;
    }

    public function getSuplementoLink(): ?string
    {
        return $this->suplementoLink;
    }

    public function setSuplementoLink(?string $suplementoLink): self
    {
        $this->suplementoLink = $suplementoLink;

        return $this;
    }
}
