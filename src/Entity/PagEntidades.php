<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagEntidadesRepository")
 */
class PagEntidades
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
     * @ORM\Column(type="string", length=255)
     */
    private $entImg;

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

    public function getEntImg(): ?string
    {
        return $this->entImg;
    }

    public function setEntImg(string $entImg): self
    {
        $this->entImg = $entImg;

        return $this;
    }
}
