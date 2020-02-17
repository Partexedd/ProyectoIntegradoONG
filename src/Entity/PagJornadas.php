<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagJornadasRepository")
 */
class PagJornadas
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
    private $titPonente;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fotoPonente;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descPonente;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechaPonenteV;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechaPonenteA;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechaPonenteC;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cartelPonenteV;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cartelPonenteA;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cartelPonenteC;

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

    public function getTitPonente(): ?string
    {
        return $this->titPonente;
    }

    public function setTitPonente(?string $titPonente): self
    {
        $this->titPonente = $titPonente;

        return $this;
    }

    public function getFotoPonente(): ?string
    {
        return $this->fotoPonente;
    }

    public function setFotoPonente(?string $fotoPonente): self
    {
        $this->fotoPonente = $fotoPonente;

        return $this;
    }

    public function getDescPonente(): ?string
    {
        return $this->descPonente;
    }

    public function setDescPonente(?string $descPonente): self
    {
        $this->descPonente = $descPonente;

        return $this;
    }
    public function __toString(){

        return $this->fechaPonenteV;
    }
    public function getFechaPonenteV(): ?\DateTimeInterface
    {
        return $this->fechaPonenteV;
    }

    public function setFechaPonenteV(?\DateTimeInterface $fechaPonenteV): self
    {
        $this->fechaPonenteV = $fechaPonenteV;

        return $this;
    }

    public function getFechaPonenteA(): ?\DateTimeInterface
    {
        return $this->fechaPonenteA;
    }

    public function setFechaPonenteA(?\DateTimeInterface $fechaPonenteA): self
    {
        $this->fechaPonenteA = $fechaPonenteA;

        return $this;
    }

    public function getFechaPonenteC(): ?\DateTimeInterface
    {
        return $this->fechaPonenteC;
    }

    public function setFechaPonenteC(?\DateTimeInterface $fechaPonenteC): self
    {
        $this->fechaPonenteC = $fechaPonenteC;

        return $this;
    }

    public function getCartelPonenteV(): ?string
    {
        return $this->cartelPonenteV;
    }

    public function setCartelPonenteV(?string $cartelPonenteV): self
    {
        $this->cartelPonenteV = $cartelPonenteV;

        return $this;
    }

    public function getCartelPonenteA(): ?string
    {
        return $this->cartelPonenteA;
    }

    public function setCartelPonenteA(?string $cartelPonenteA): self
    {
        $this->cartelPonenteA = $cartelPonenteA;

        return $this;
    }

    public function getCartelPonenteC(): ?string
    {
        return $this->cartelPonenteC;
    }

    public function setCartelPonenteC(?string $cartelPonenteC): self
    {
        $this->cartelPonenteC = $cartelPonenteC;

        return $this;
    }
}
