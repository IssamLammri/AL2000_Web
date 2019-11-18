<?php

namespace App\Entity;

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
