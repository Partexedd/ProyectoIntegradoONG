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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jAlicante;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jValencia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jCastellon;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $textDebajoJornada;

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

    public function getJAlicante(): ?string
    {
        return $this->jAlicante;
    }

    public function setJAlicante(?string $jAlicante): self
    {
        $this->jAlicante = $jAlicante;

        return $this;
    }

    public function getJValencia(): ?string
    {
        return $this->jValencia;
    }

    public function setJValencia(?string $jValencia): self
    {
        $this->jValencia = $jValencia;

        return $this;
    }

    public function getJCastellon(): ?string
    {
        return $this->jCastellon;
    }

    public function setJCastellon(?string $jCastellon): self
    {
        $this->jCastellon = $jCastellon;

        return $this;
    }

    public function getTextDebajoJornada(): ?string
    {
        return $this->textDebajoJornada;
    }

    public function setTextDebajoJornada(?string $textDebajoJornada): self
    {
        $this->textDebajoJornada = $textDebajoJornada;

        return $this;
    }
}
