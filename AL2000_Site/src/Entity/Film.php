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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acteur", mappedBy="idfilm")
     */
    private $idacteur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Catalogue", inversedBy="idFilm")
     * @ORM\JoinTable(name="cataloguefilms",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_Film", referencedColumnName="ID_Film")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_Catalogue", referencedColumnName="ID_Catalogue")
     *   }
     * )
     */
    private $idCatalogue;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Genre", mappedBy="idFilm")
     */
    private $idGenre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idacteur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idCatalogue = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idGenre = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * @return Collection|Acteur[]
     */
    public function getIdacteur(): Collection
    {
        return $this->idacteur;
    }

    public function addIdacteur(Acteur $idacteur): self
    {
        if (!$this->idacteur->contains($idacteur)) {
            $this->idacteur[] = $idacteur;
            $idacteur->addIdfilm($this);
        }

        return $this;
    }

    public function removeIdacteur(Acteur $idacteur): self
    {
        if ($this->idacteur->contains($idacteur)) {
            $this->idacteur->removeElement($idacteur);
            $idacteur->removeIdfilm($this);
        }

        return $this;
    }

    /**
     * @return Collection|Catalogue[]
     */
    public function getIdCatalogue(): Collection
    {
        return $this->idCatalogue;
    }

    public function addIdCatalogue(Catalogue $idCatalogue): self
    {
        if (!$this->idCatalogue->contains($idCatalogue)) {
            $this->idCatalogue[] = $idCatalogue;
        }

        return $this;
    }

    public function removeIdCatalogue(Catalogue $idCatalogue): self
    {
        if ($this->idCatalogue->contains($idCatalogue)) {
            $this->idCatalogue->removeElement($idCatalogue);
        }

        return $this;
    }

    /**
     * @return Collection|Genre[]
     */
    public function getIdGenre(): Collection
    {
        return $this->idGenre;
    }

    public function addIdGenre(Genre $idGenre): self
    {
        if (!$this->idGenre->contains($idGenre)) {
            $this->idGenre[] = $idGenre;
            $idGenre->addIdFilm($this);
        }

        return $this;
    }

    public function removeIdGenre(Genre $idGenre): self
    {
        if ($this->idGenre->contains($idGenre)) {
            $this->idGenre->removeElement($idGenre);
            $idGenre->removeIdFilm($this);
        }

        return $this;
    }

}
