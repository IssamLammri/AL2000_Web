<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * CarteAbonnement
 *
 * @ORM\Table(name="carte_abonnement", indexes={@ORM\Index(name="ID_Abonne", columns={"ID_Abonne"})})
 * @ORM\Entity
 */
class CarteAbonnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Carte_Abonne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCarteAbonne;

    /**
     * @var int
     *
     * @ORM\Column(name="Montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var \Abonne
     *
     * @ORM\ManyToOne(targetEntity="Abonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Abonne", referencedColumnName="ID_Abonne")
     * })
     */
    private $idAbonne;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Genre", inversedBy="CarteAbonnement")
     *@ORM\JoinTable(name="Interdité_Genre",
     * joinColumns={@ORM\JoinColumn(name="idCarteAbonnement", referencedColumnName="ID_Carte_Abonne")},
     * inverseJoinColumns={@ORM\JoinColumn(name="idGenre", referencedColumnName="ID_Genre")})
     */
    private $Genres;

    public function __construct()
    {
        $this->Genres = new ArrayCollection();
    }

    /**
     * @return Collection|Genre[]
     */
    public function getGenres(): Collection
    {
        return $this->Genres;
    }

    public function addGenres(Genre $Gen): self
    {
        if (!$this->Genres->contains($Gen)) {
            $this->Genres[] = $Gen;
        }
        return $this;
    }

    public function removeGenres(Genre $Gen): self
    {
        if ($this->Genres->contains($Gen)) {
            $this->Genres->removeElement($Gen);
        }
        return $this;
    }


    public function getIdCarteAbonne(): ?int
    {
        return $this->idCarteAbonne;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getIdAbonne(): ?Abonne
    {
        return $this->idAbonne;
    }

    public function setIdAbonne(?Abonne $idAbonne): self
    {
        $this->idAbonne = $idAbonne;

        return $this;
    }


}
