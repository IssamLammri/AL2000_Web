<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Al2000
 *
 * @ORM\Table(name="al2000")
 * @ORM\Entity
 */
class Al2000
{
    /**
     * @var int
     *
     * @ORM\Column(name="N_Machine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nMachine;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=30, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=100, nullable=false)
     */
    private $adresse;

    public function getNMachine(): ?int
    {
        return $this->nMachine;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }


}
