<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactarRepository")
 */
class Contactar
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $rssProvincia;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $representa;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $asunto;

    /**
     * @ORM\Column(type="text")
     */
    private $mensaje;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRssProvincia(): ?string
    {
        return $this->rssProvincia;
    }

    public function setRssProvincia(string $rssProvincia): self
    {
        $this->rssProvincia = $rssProvincia;

        return $this;
    }

    public function getRepresenta(): ?string
    {
        return $this->representa;
    }

    public function setRepresenta(string $representa): self
    {
        $this->representa = $representa;

        return $this;
    }

    public function getAsunto(): ?string
    {
        return $this->asunto;
    }

    public function setAsunto(?string $asunto): self
    {
        $this->asunto = $asunto;

        return $this;
    }

    public function getMensaje(): ?string
    {
        return $this->mensaje;
    }

    public function setMensaje(string $mensaje): self
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }
}
