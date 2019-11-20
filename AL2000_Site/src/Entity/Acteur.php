<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acteur
 *
 * @ORM\Table(name="acteur")
 * @ORM\Entity
 */
class Acteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Acteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActeur;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Acteur", type="string", length=30, nullable=false)
     */
    private $nomActeur;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Acteur", type="string", length=30, nullable=false)
     */
    private $prenomActeur;

    /**
     * @var string
     *
     * @ORM\Column(name="Nationalite", type="string", length=30, nullable=false)
     */
    private $nationalite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Film", inversedBy="idacteur")
     * @ORM\JoinTable(name="acteur_filme",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idActeur", referencedColumnName="ID_Acteur")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idFilm", referencedColumnName="ID_Film")
     *   }
     * )
     */
    private $idfilm;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idfilm = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdActeur(): ?int
    {
        return $this->idActeur;
    }

    public function getNomActeur(): ?string
    {
        return $this->nomActeur;
    }

    public function setNomActeur(string $nomActeur): self
    {
        $this->nomActeur = $nomActeur;

        return $this;
    }

    public function getPrenomActeur(): ?string
    {
        return $this->prenomActeur;
    }

    public function setPrenomActeur(string $prenomActeur): self
    {
        $this->prenomActeur = $prenomActeur;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * @return Collection|Film[]
     */
    public function getIdfilm(): Collection
    {
        return $this->idfilm;
    }

    public function addIdfilm(Film $idfilm): self
    {
        if (!$this->idfilm->contains($idfilm)) {
            $this->idfilm[] = $idfilm;
        }

        return $this;
    }

    public function removeIdfilm(Film $idfilm): self
    {
        if ($this->idfilm->contains($idfilm)) {
            $this->idfilm->removeElement($idfilm);
        }

        return $this;
    }

}
