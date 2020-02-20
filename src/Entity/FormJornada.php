<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormJornadaRepository")
 */
class FormJornada
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $primerApellido;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $segundoApellido;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $DNI;

    /**
     * @ORM\Column(type="integer")
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $provincia;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $entidad;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $cargo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $entidadajena;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $certficado;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $profesion;

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

    public function getPrimerApellido(): ?string
    {
        return $this->primerApellido;
    }

    public function setPrimerApellido(string $primerApellido): self
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    public function getSegundoApellido(): ?string
    {
        return $this->segundoApellido;
    }

    public function setSegundoApellido(string $segundoApellido): self
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    public function getDNI(): ?string
    {
        return $this->DNI;
    }

    public function setDNI(string $DNI): self
    {
        $this->DNI = $DNI;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->telefono;
    }

    public function setTelefono(int $telefono): self
    {
        $this->telefono = $telefono;

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

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getEntidad(): ?string
    {
        return $this->entidad;
    }

    public function setEntidad(string $entidad): self
    {
        $this->entidad = $entidad;

        return $this;
    }

    public function getCargo(): ?string
    {
        return $this->cargo;
    }

    public function setCargo(?string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getEntidadajena(): ?string
    {
        return $this->entidadajena;
    }

    public function setEntidadajena(?string $entidadajena): self
    {
        $this->entidadajena = $entidadajena;

        return $this;
    }

    public function getCertficado(): ?string
    {
        return $this->certficado;
    }

    public function setCertficado(string $certficado): self
    {
        $this->certficado = $certficado;

        return $this;
    }

    public function getProfesion(): ?string
    {
        return $this->profesion;
    }

    public function setProfesion(string $profesion): self
    {
        $this->profesion = $profesion;

        return $this;
    }
}
