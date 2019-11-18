<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 *
 * @ORM\Table(name="administrateur", indexes={@ORM\Index(name="ID_Employer", columns={"ID_Employer"})})
 * @ORM\Entity
 */
class Administrateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Administrateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdministrateur;

    /**
     * @var int
     *
     * @ORM\Column(name="Cle_Administrateur", type="integer", nullable=false)
     */
    private $cleAdministrateur;

    /**
     * @var \Employer
     *
     * @ORM\ManyToOne(targetEntity="Employer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Employer", referencedColumnName="ID_Employer")
     * })
     */
    private $idEmployer;

    public function getIdAdministrateur(): ?int
    {
        return $this->idAdministrateur;
    }

    public function getCleAdministrateur(): ?int
    {
        return $this->cleAdministrateur;
    }

    public function setCleAdministrateur(int $cleAdministrateur): self
    {
        $this->cleAdministrateur = $cleAdministrateur;

        return $this;
    }

    public function getIdEmployer(): ?Employer
    {
        return $this->idEmployer;
    }

    public function setIdEmployer(?Employer $idEmployer): self
    {
        $this->idEmployer = $idEmployer;

        return $this;
    }


}
