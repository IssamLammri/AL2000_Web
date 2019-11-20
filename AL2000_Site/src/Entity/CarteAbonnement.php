<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarteAbonnement
 *
 * @ORM\Table(name="carte_abonnement", indexes={@ORM\Index(name="ID_Abonne", columns={"ID_Abonne"})})
 * @ORM\Entity
 */
class CarteAbonnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Carte_Abonne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCarteAbonne;

    /**
     * @var int
     *
     * @ORM\Column(name="Montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var \Abonne
     *
     * @ORM\ManyToOne(targetEntity="Abonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Abonne", referencedColumnName="ID_Abonne")
     * })
     */
    private $idAbonne;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Genre", inversedBy="idcarteabonnement")
     * @ORM\JoinTable(name="interditã©_genre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idCarteAbonnement", referencedColumnName="ID_Carte_Abonne")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idGenre", referencedColumnName="ID_Genre")
     *   }
     * )
     */
    private $idgenre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idgenre = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdCarteAbonne(): ?int
    {
        return $this->idCarteAbonne;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getIdAbonne(): ?Abonne
    {
        return $this->idAbonne;
    }

    public function setIdAbonne(?Abonne $idAbonne): self
    {
        $this->idAbonne = $idAbonne;

        return $this;
    }

}
