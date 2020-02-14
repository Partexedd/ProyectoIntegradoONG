<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagEntityRepository")
 */
class PagEntity
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
}
