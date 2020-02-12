<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagMirantRepository")
 */
class PagMirant
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
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $edicion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tituloMirantCab;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descMirantCab;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgMirantCab;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $spotMirant;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $pelTitulo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $pelTrailer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pelImg;

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

    public function getEdicion(): ?string
    {
        return $this->edicion;
    }

    public function setEdicion(?string $edicion): self
    {
        $this->edicion = $edicion;

        return $this;
    }

    public function getTituloMirantCab(): ?string
    {
        return $this->tituloMirantCab;
    }

    public function setTituloMirantCab(?string $tituloMirantCab): self
    {
        $this->tituloMirantCab = $tituloMirantCab;

        return $this;
    }

    public function getDescMirantCab(): ?string
    {
        return $this->descMirantCab;
    }

    public function setDescMirantCab(?string $descMirantCab): self
    {
        $this->descMirantCab = $descMirantCab;

        return $this;
    }

    public function getImgMirantCab(): ?string
    {
        return $this->imgMirantCab;
    }

    public function setImgMirantCab(?string $imgMirantCab): self
    {
        $this->imgMirantCab = $imgMirantCab;

        return $this;
    }

    public function getSpotMirant(): ?string
    {
        return $this->spotMirant;
    }

    public function setSpotMirant(?string $spotMirant): self
    {
        $this->spotMirant = $spotMirant;

        return $this;
    }

    public function getPelTitulo(): ?string
    {
        return $this->pelTitulo;
    }

    public function setPelTitulo(?string $pelTitulo): self
    {
        $this->pelTitulo = $pelTitulo;

        return $this;
    }

    public function getPelTrailer(): ?string
    {
        return $this->pelTrailer;
    }

    public function setPelTrailer(?string $pelTrailer): self
    {
        $this->pelTrailer = $pelTrailer;

        return $this;
    }

    public function getPelImg(): ?string
    {
        return $this->pelImg;
    }

    public function setPelImg(?string $pelImg): self
    {
        $this->pelImg = $pelImg;

        return $this;
    }
}
