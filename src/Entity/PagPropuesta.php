<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagPropuestaRepository")
 */
class PagPropuesta
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\PaginasONG", cascade={"persist", "remove"})
     */
    private $titCabecera;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitCabecera(): ?PaginasONG
    {
        return $this->titCabecera;
    }

    public function setTitCabecera(?PaginasONG $titCabecera): self
    {
        $this->titCabecera = $titCabecera;

        return $this;
    }
}
