<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table(name="genre")
 * @ORM\Entity
 */
class Genre
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Genre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Genre", type="string", length=30, nullable=false)
     */
    private $nomGenre;

    /**
     * @var int
     *
     * @ORM\Column(name="Age_Correspondant", type="integer", nullable=false)
     */
    private $ageCorrespondant;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Acteur", mappedBy="Genres")
     *
     */
    private $Carteabonnement;

    public function __construct()
    {
        $this->Carteabonnement = new ArrayCollection();
    }

    /**
     * @return Collection|CarteAbonnement[]
     */
    public function getCarteAbonnement(): Collection
    {
        return $this->Carteabonnement;
    }

    public function addCarteAbonnement(CarteAbonnement $Crt): self
    {
        if (!$this->Carteabonnement->contains($Crt)) {
            $this->Carteabonnement[] = $Crt;
            $Crt->addGenres($this);
        }
        return $this;
    }

    public function removeCarteAbonnement(CarteAbonnement $Crt): self
    {
        if ($this->Carteabonnement->contains($Crt)) {
            $this->Carteabonnement->removeElement($Crt);
            $Crt->removeGenres($this);
        }
        return $this;
    }

    public function getIdGenre(): ?int
    {
        return $this->idGenre;
    }

    public function getNomGenre(): ?string
    {
        return $this->nomGenre;
    }

    public function setNomGenre(string $nomGenre): self
    {
        $this->nomGenre = $nomGenre;

        return $this;
    }

    public function getAgeCorrespondant(): ?int
    {
        return $this->ageCorrespondant;
    }

    public function setAgeCorrespondant(int $ageCorrespondant): self
    {
        $this->ageCorrespondant = $ageCorrespondant;

        return $this;
    }


}
