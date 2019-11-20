<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandesFilmes
 *
 * @ORM\Table(name="demandes_filmes", indexes={@ORM\Index(name="ID_Client", columns={"ID_Client"}), @ORM\Index(name="IDX_7C29DC41614731B4", columns={"ID_Film"})})
 * @ORM\Entity
 */
class DemandesFilmes
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Demande", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dateDemande;

    /**
     * @var bool
     *
     * @ORM\Column(name="TraiterOuNon", type="boolean", nullable=false)
     */
    private $traiterounon;

    /**
     * @var \Client
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Client", referencedColumnName="ID_Client")
     * })
     */
    private $idClient;

    /**
     * @var \Film
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Film")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Film", referencedColumnName="ID_Film")
     * })
     */
    private $idFilm;

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function getTraiterounon(): ?bool
    {
        return $this->traiterounon;
    }

    public function setTraiterounon(bool $traiterounon): self
    {
        $this->traiterounon = $traiterounon;

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

    public function getIdFilm(): ?Film
    {
        return $this->idFilm;
    }

    public function setIdFilm(?Film $idFilm): self
    {
        $this->idFilm = $idFilm;

        return $this;
    }


}
