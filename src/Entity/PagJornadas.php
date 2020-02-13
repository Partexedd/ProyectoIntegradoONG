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
     * @ORM\OneToOne(targetEntity="App\Entity\paginasONG", cascade={"persist", "remove"})
     */
    private $titCabecera;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $formularioIns;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\fechasJornadas", cascade={"persist", "remove"})
     */
    private $fechasJornadas;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\cartelesJornadas", cascade={"persist", "remove"})
     */
    private $CartelesJornadas;

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

    public function getFormularioIns(): ?string
    {
        return $this->formularioIns;
    }

    public function setFormularioIns(string $formularioIns): self
    {
        $this->formularioIns = $formularioIns;

        return $this;
    }

    public function getFechasJornadas(): ?fechasJornadas
    {
        return $this->fechasJornadas;
    }

    public function setFechasJornadas(?fechasJornadas $fechasJornadas): self
    {
        $this->fechasJornadas = $fechasJornadas;

        return $this;
    }

    public function getCartelesJornadas(): ?cartelesJornadas
    {
        return $this->CartelesJornadas;
    }

    public function setCartelesJornadas(?cartelesJornadas $CartelesJornadas): self
    {
        $this->CartelesJornadas = $CartelesJornadas;

        return $this;
    }
}
