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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Film", inversedBy="idGenre")
     * @ORM\JoinTable(name="filmes_genre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_Genre", referencedColumnName="ID_Genre")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_Film", referencedColumnName="ID_Film")
     *   }
     * )
     */
    private $idFilm;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CarteAbonnement", mappedBy="idgenre")
     */
    private $idcarteabonnement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFilm = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idcarteabonnement = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * @return Collection|Film[]
     */
    public function getIdFilm(): Collection
    {
        return $this->idFilm;
    }

    public function addIdFilm(Film $idFilm): self
    {
        if (!$this->idFilm->contains($idFilm)) {
            $this->idFilm[] = $idFilm;
        }

        return $this;
    }

    public function removeIdFilm(Film $idFilm): self
    {
        if ($this->idFilm->contains($idFilm)) {
            $this->idFilm->removeElement($idFilm);
        }

        return $this;
    }

    /**
     * @return Collection|CarteAbonnement[]
     */
    public function getIdcarteabonnement(): Collection
    {
        return $this->idcarteabonnement;
    }

    public function addIdcarteabonnement(CarteAbonnement $idcarteabonnement): self
    {
        if (!$this->idcarteabonnement->contains($idcarteabonnement)) {
            $this->idcarteabonnement[] = $idcarteabonnement;
            $idcarteabonnement->addIdgenre($this);
        }

        return $this;
    }

    public function removeIdcarteabonnement(CarteAbonnement $idcarteabonnement): self
    {
        if ($this->idcarteabonnement->contains($idcarteabonnement)) {
            $this->idcarteabonnement->removeElement($idcarteabonnement);
            $idcarteabonnement->removeIdgenre($this);
        }

        return $this;
    }

}
