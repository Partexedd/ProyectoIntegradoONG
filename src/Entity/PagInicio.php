<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagInicioRepository")
 */
class PagInicio
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titPagina;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $desPagina;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $imagenPagina;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $videoConocenos;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $pdfSuplemento;

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

    public function getTitPagina(): ?string
    {
        return $this->titPagina;
    }

    public function setTitPagina(?string $titPagina): self
    {
        $this->titPagina = $titPagina;

        return $this;
    }

    public function getDesPagina(): ?string
    {
        return $this->desPagina;
    }

    public function setDesPagina(?string $desPagina): self
    {
        $this->desPagina = $desPagina;

        return $this;
    }

    public function getImagenPagina(): ?string
    {
        return $this->imagenPagina;
    }

    public function setImagenPagina(?string $imagenPagina): self
    {
        $this->imagenPagina = $imagenPagina;

        return $this;
    }

    public function getVideoConocenos(): ?string
    {
        return $this->videoConocenos;
    }

    public function setVideoConocenos(?string $videoConocenos): self
    {
        $this->videoConocenos = $videoConocenos;

        return $this;
    }

    public function getPdfSuplemento(): ?string
    {
        return $this->pdfSuplemento;
    }

    public function setPdfSuplemento(?string $pdfSuplemento): self
    {
        $this->pdfSuplemento = $pdfSuplemento;

        return $this;
    }
}
