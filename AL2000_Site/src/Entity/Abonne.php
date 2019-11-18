<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonne
 *
 * @ORM\Table(name="abonne", indexes={@ORM\Index(name="ID_Client", columns={"ID_Client"})})
 * @ORM\Entity
 */
class Abonne
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Abonne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="NB_Location", type="integer", nullable=false)
     */
    private $nbLocation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Abonnement", type="date", nullable=false)
     */
    private $dateAbonnement;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Client", referencedColumnName="ID_Client")
     * })
     */
    private $idClient;

    public function getIdAbonne(): ?int
    {
        return $this->idAbonne;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNbLocation(): ?int
    {
        return $this->nbLocation;
    }

    public function setNbLocation(int $nbLocation): self
    {
        $this->nbLocation = $nbLocation;

        return $this;
    }

    public function getDateAbonnement(): ?\DateTimeInterface
    {
        return $this->dateAbonnement;
    }

    public function setDateAbonnement(\DateTimeInterface $dateAbonnement): self
    {
        $this->dateAbonnement = $dateAbonnement;

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


}
