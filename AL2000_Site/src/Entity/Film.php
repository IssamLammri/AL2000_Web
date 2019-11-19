<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity
 */
class Film
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Film", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFilm;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre_Film", type="string", length=50, nullable=false)
     */
    private $titreFilm;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Realisateur", type="string", length=50, nullable=false)
     */
    private $nomRealisateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Duree", type="time", nullable=false)
     */
    private $duree;

    /**
     * @var int
     *
     * @ORM\Column(name="Note", type="integer", nullable=false)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="Nationalite", type="string", length=50, nullable=false)
     */
    private $nationalite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Sortie", type="date", nullable=false)
     */
    private $dateSortie;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Acteur", mappedBy="Filme")
     *
     */
    private $acteur;

    public function __construct()
    {
        $this->acteur = new ArrayCollection();
    }

    /**
     * @return Collection|Acteur[]
     */
    public function getActeur(): Collection
    {
        return $this->acteur;
    }

    public function addActeur(Acteur $Act): self
    {
        if (!$this->acteur->contains($Act)) {
            $this->acteur[] = $Act;
            $Act->addFilme($this);
        }
        return $this;
    }

    public function removeActeur(Acteur $Act): self
    {
        if ($this->acteur->contains($Act)) {
            $this->acteur->removeElement($Act);
            $Act->removeFilm($this);
        }
        return $this;
    }

    public function getIdFilm(): ?int
    {
        return $this->idFilm;
    }

    public function getTitreFilm(): ?string
    {
        return $this->titreFilm;
    }

    public function setTitreFilm(string $titreFilm): self
    {
        $this->titreFilm = $titreFilm;

        return $this;
    }

    public function getNomRealisateur(): ?string
    {
        return $this->nomRealisateur;
    }

    public function setNomRealisateur(string $nomRealisateur): self
    {
        $this->nomRealisateur = $nomRealisateur;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;

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

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->dateSortie;
    }

    public function setDateSortie(\DateTimeInterface $dateSortie): self
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }


}
