<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PaginasONGRepository")
 */
class PaginasONG
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombrePagina;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titCabecera;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombrePagina(): ?string
    {
        return $this->nombrePagina;
    }

    public function setNombrePagina(string $nombrePagina): self
    {
        $this->nombrePagina = $nombrePagina;

        return $this;
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
}
