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
     * @ORM\ManyToMany(targetEntity="App\Entity\Film", inversedBy="acteur")
     *
     */
    private $Filme;

    public function __construct()
    {
        $this->Filme = new ArrayCollection();
    }

    /**
     * @return Collection|Film[]
     */
    public function getFilme(): Collection
    {
        return $this->Filme;
    }

    public function addFilme(Film $Fil): self
    {
        if (!$this->Filme->contains($Fil)) {
            $this->Filme[] = $Fil;
        }
        return $this;
    }

    public function removeFilm(Film $Fil): self
    {
        if ($this->Filme->contains($Fil)) {
            $this->Filme->removeElement($Fil);
        }
        return $this;
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


}
