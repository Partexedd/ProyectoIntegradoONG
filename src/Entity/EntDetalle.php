<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntDetalleRepository")
 */
class EntDetalle
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
    private $entImg;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entTlf;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $entMail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entIFrame;

    /**
     * @ORM\Column(type="string", length=75, nullable=true)
     */
    private $entNombre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $entText;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entFacebook;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entTwitter;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entInstagram;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entYoutube;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntImg(): ?string
    {
        return $this->entImg;
    }

    public function setEntImg(?string $entImg): self
    {
        $this->entImg = $entImg;

        return $this;
    }

    public function getEntTlf(): ?string
    {
        return $this->entTlf;
    }

    public function setEntTlf(?string $entTlf): self
    {
        $this->entTlf = $entTlf;

        return $this;
    }

    public function getEntMail(): ?string
    {
        return $this->entMail;
    }

    public function setEntMail(?string $entMail): self
    {
        $this->entMail = $entMail;

        return $this;
    }

    public function getEntIFrame(): ?string
    {
        return $this->entIFrame;
    }

    public function setEntIFrame(?string $entIFrame): self
    {
        $this->entIFrame = $entIFrame;

        return $this;
    }

    public function getEntNombre(): ?string
    {
        return $this->entNombre;
    }

    public function setEntNombre(?string $entNombre): self
    {
        $this->entNombre = $entNombre;

        return $this;
    }

    public function getEntText(): ?string
    {
        return $this->entText;
    }

    public function setEntText(?string $entText): self
    {
        $this->entText = $entText;

        return $this;
    }

    public function getEntFacebook(): ?string
    {
        return $this->entFacebook;
    }

    public function setEntFacebook(?string $entFacebook): self
    {
        $this->entFacebook = $entFacebook;

        return $this;
    }

    public function getEntTwitter(): ?string
    {
        return $this->entTwitter;
    }

    public function setEntTwitter(?string $entTwitter): self
    {
        $this->entTwitter = $entTwitter;

        return $this;
    }

    public function getEntInstagram(): ?string
    {
        return $this->entInstagram;
    }

    public function setEntInstagram(?string $entInstagram): self
    {
        $this->entInstagram = $entInstagram;

        return $this;
    }

    public function getEntYoutube(): ?string
    {
        return $this->entYoutube;
    }

    public function setEntYoutube(?string $entYoutube): self
    {
        $this->entYoutube = $entYoutube;

        return $this;
    }
}
