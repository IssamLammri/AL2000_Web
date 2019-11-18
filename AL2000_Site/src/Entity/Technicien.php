<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Technicien
 *
 * @ORM\Table(name="technicien", indexes={@ORM\Index(name="ID_Employer", columns={"ID_Employer"})})
 * @ORM\Entity
 */
class Technicien
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Technicien", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTechnicien;

    /**
     * @var \Employer
     *
     * @ORM\ManyToOne(targetEntity="Employer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Employer", referencedColumnName="ID_Employer")
     * })
     */
    private $idEmployer;

    public function getIdTechnicien(): ?int
    {
        return $this->idTechnicien;
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
