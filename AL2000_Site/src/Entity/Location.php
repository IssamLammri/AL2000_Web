<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location", indexes={@ORM\Index(name="ID_DVD", columns={"ID_DVD"}), @ORM\Index(name="ID_Client", columns={"ID_Client"})})
 * @ORM\Entity
 */
class Location
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Location", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLocation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Location", type="date", nullable=false)
     */
    private $dateLocation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Date_Rendu", type="integer", nullable=true)
     */
    private $dateRendu;

    /**
     * @var bool
     *
     * @ORM\Column(name="AbonneOuNon", type="boolean", nullable=false)
     */
    private $abonneounon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Prix_Location", type="integer", nullable=true)
     */
    private $prixLocation;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Client", referencedColumnName="ID_Client")
     * })
     */
    private $idClient;

    /**
     * @var \Dvd
     *
     * @ORM\ManyToOne(targetEntity="Dvd")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DVD", referencedColumnName="ID_DVD")
     * })
     */
    private $idDvd;

    public function getIdLocation(): ?int
    {
        return $this->idLocation;
    }

    public function getDateLocation(): ?\DateTimeInterface
    {
        return $this->dateLocation;
    }

    public function setDateLocation(\DateTimeInterface $dateLocation): self
    {
        $this->dateLocation = $dateLocation;

        return $this;
    }

    public function getDateRendu(): ?int
    {
        return $this->dateRendu;
    }

    public function setDateRendu(?int $dateRendu): self
    {
        $this->dateRendu = $dateRendu;

        return $this;
    }

    public function getAbonneounon(): ?bool
    {
        return $this->abonneounon;
    }

    public function setAbonneounon(bool $abonneounon): self
    {
        $this->abonneounon = $abonneounon;

        return $this;
    }

    public function getPrixLocation(): ?int
    {
        return $this->prixLocation;
    }

    public function setPrixLocation(?int $prixLocation): self
    {
        $this->prixLocation = $prixLocation;

        return $this;
    }

    public function getIdClient(): ?Client
    {
        return $this->idClient;
    }

    public function setIdClient(?Client $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getIdDvd(): ?Dvd
    {
        return $this->idDvd;
    }

    public function setIdDvd(?Dvd $idDvd): self
    {
        $this->idDvd = $idDvd;

        return $this;
    }


}
