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
     * @ORM\OneToOne(targetEntity="App\Entity\paginasONG", cascade={"persist", "remove"})
     */
    private $titCabecera;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $videoConocenos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkSuplementoPDF;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\spotInicio", cascade={"persist", "remove"})
     */
    private $spot;

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

    public function getVideoConocenos(): ?string
    {
        return $this->videoConocenos;
    }

    public function setVideoConocenos(string $videoConocenos): self
    {
        $this->videoConocenos = $videoConocenos;

        return $this;
    }

    public function getLinkSuplementoPDF(): ?string
    {
        return $this->linkSuplementoPDF;
    }

    public function setLinkSuplementoPDF(string $linkSuplementoPDF): self
    {
        $this->linkSuplementoPDF = $linkSuplementoPDF;

        return $this;
    }

    public function getSpot(): ?spotInicio
    {
        return $this->spot;
    }

    public function setSpot(?spotInicio $spot): self
    {
        $this->spot = $spot;

        return $this;
    }
}
