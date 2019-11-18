<?php

namespace App\Entity;

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


}
