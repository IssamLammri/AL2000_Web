<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employer
 *
 * @ORM\Table(name="employer")
 * @ORM\Entity
 */
class Employer
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Employer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmployer;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Employer", type="string", length=30, nullable=false)
     */
    private $nomEmployer;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Employer", type="string", length=30, nullable=false)
     */
    private $prenomEmployer;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse_Employer", type="string", length=100, nullable=false)
     */
    private $adresseEmployer;

    public function getIdEmployer(): ?int
    {
        return $this->idEmployer;
    }

    public function getNomEmployer(): ?string
    {
        return $this->nomEmployer;
    }

    public function setNomEmployer(string $nomEmployer): self
    {
        $this->nomEmployer = $nomEmployer;

        return $this;
    }

    public function getPrenomEmployer(): ?string
    {
        return $this->prenomEmployer;
    }

    public function setPrenomEmployer(string $prenomEmployer): self
    {
        $this->prenomEmployer = $prenomEmployer;

        return $this;
    }

    public function getAdresseEmployer(): ?string
    {
        return $this->adresseEmployer;
    }

    public function setAdresseEmployer(string $adresseEmployer): self
    {
        $this->adresseEmployer = $adresseEmployer;

        return $this;
    }


}
