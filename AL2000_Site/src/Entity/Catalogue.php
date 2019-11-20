<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogue
 *
 * @ORM\Table(name="catalogue")
 * @ORM\Entity
 */
class Catalogue
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Catalogue", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCatalogue;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Catalogue", type="string", length=50, nullable=false)
     */
    private $nomCatalogue;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Film", mappedBy="idCatalogue")
     */
    private $idFilm;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFilm = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdCatalogue(): ?int
    {
        return $this->idCatalogue;
    }

    public function getNomCatalogue(): ?string
    {
        return $this->nomCatalogue;
    }

    public function setNomCatalogue(string $nomCatalogue): self
    {
        $this->nomCatalogue = $nomCatalogue;

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
            $idFilm->addIdCatalogue($this);
        }

        return $this;
    }

    public function removeIdFilm(Film $idFilm): self
    {
        if ($this->idFilm->contains($idFilm)) {
            $this->idFilm->removeElement($idFilm);
            $idFilm->removeIdCatalogue($this);
        }

        return $this;
    }

}
