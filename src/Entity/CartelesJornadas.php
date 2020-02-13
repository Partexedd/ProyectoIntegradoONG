<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CartelesJornadasRepository")
 */
class CartelesJornadas
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
    private $imgValencia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgAlicante;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgCastellon;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImgValencia(): ?string
    {
        return $this->imgValencia;
    }

    public function setImgValencia(?string $imgValencia): self
    {
        $this->imgValencia = $imgValencia;

        return $this;
    }

    public function getImgAlicante(): ?string
    {
        return $this->imgAlicante;
    }

    public function setImgAlicante(?string $imgAlicante): self
    {
        $this->imgAlicante = $imgAlicante;

        return $this;
    }

    public function getImgCastellon(): ?string
    {
        return $this->imgCastellon;
    }

    public function setImgCastellon(?string $imgCastellon): self
    {
        $this->imgCastellon = $imgCastellon;

        return $this;
    }
}
