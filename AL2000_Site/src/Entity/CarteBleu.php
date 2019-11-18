<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarteBleu
 *
 * @ORM\Table(name="carte_bleu")
 * @ORM\Entity
 */
class CarteBleu
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Carte_Bleu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCarteBleu;

    /**
     * @var int
     *
     * @ORM\Column(name="N°Carte", type="integer", nullable=false)
     */
    private $n�carte;

    /**
     * @var string
     *
     * @ORM\Column(name="Titulaire_Carte", type="string", length=30, nullable=false)
     */
    private $titulaireCarte;

    /**
     * @var int
     *
     * @ORM\Column(name="CVV", type="integer", nullable=false)
     */
    private $cvv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Experation", type="date", nullable=false)
     */
    private $dateExperation;

    public function getIdCarteBleu(): ?int
    {
        return $this->idCarteBleu;
    }

    public function getN�carte(): ?int
    {
        return $this->n�carte;
    }

    public function setN�carte(int $n�carte): self
    {
        $this->n�carte = $n�carte;

        return $this;
    }

    public function getTitulaireCarte(): ?string
    {
        return $this->titulaireCarte;
    }

    public function setTitulaireCarte(string $titulaireCarte): self
    {
        $this->titulaireCarte = $titulaireCarte;

        return $this;
    }

    public function getCvv(): ?int
    {
        return $this->cvv;
    }

    public function setCvv(int $cvv): self
    {
        $this->cvv = $cvv;

        return $this;
    }

    public function getDateExperation(): ?\DateTimeInterface
    {
        return $this->dateExperation;
    }

    public function setDateExperation(\DateTimeInterface $dateExperation): self
    {
        $this->dateExperation = $dateExperation;

        return $this;
    }


}
