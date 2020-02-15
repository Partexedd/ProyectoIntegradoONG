<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagContactoRepository")
 */
class PagContacto
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
     * @ORM\Column(type="text")
     */
    private $direccionV;

    /**
     * @ORM\Column(type="text")
     */
    private $direccionA;

    /**
     * @ORM\Column(type="text")
     */
    private $direccionC;

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

    public function getDireccionV(): ?string
    {
        return $this->direccionV;
    }

    public function setDireccionV(string $direccionV): self
    {
        $this->direccionV = $direccionV;

        return $this;
    }

    public function getDireccionA(): ?string
    {
        return $this->direccionA;
    }

    public function setDireccionA(string $direccionA): self
    {
        $this->direccionA = $direccionA;

        return $this;
    }
    public function __toString(){
        return $this->getDireccionC();

    }
    public function getDireccionC(): ?string
    {
        return $this->direccionC;
    }

    public function setDireccionC(string $direccionC): self
    {
        $this->direccionC = $direccionC;

        return $this;
    }
}
