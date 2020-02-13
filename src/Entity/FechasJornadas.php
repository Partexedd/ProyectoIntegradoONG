<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FechasJornadasRepository")
 */
class FechasJornadas
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
    private $valencia;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $alicante;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $castellon;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValencia(): ?string
    {
        return $this->valencia;
    }

    public function setValencia(string $valencia): self
    {
        $this->valencia = $valencia;

        return $this;
    }

    public function getAlicante(): ?string
    {
        return $this->alicante;
    }

    public function setAlicante(string $alicante): self
    {
        $this->alicante = $alicante;

        return $this;
    }

    public function getCastellon(): ?string
    {
        return $this->castellon;
    }

    public function setCastellon(string $castellon): self
    {
        $this->castellon = $castellon;

        return $this;
    }
}
