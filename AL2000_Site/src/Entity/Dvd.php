<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dvd
 *
 * @ORM\Table(name="dvd", indexes={@ORM\Index(name="ID_AL2000", columns={"ID_AL2000"}), @ORM\Index(name="ID_Filme", columns={"ID_Filme"})})
 * @ORM\Entity
 */
class Dvd
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_DVD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDvd;

    /**
     * @var bool
     *
     * @ORM\Column(name="Existe", type="boolean", nullable=false)
     */
    private $existe;

    /**
     * @var int
     *
     * @ORM\Column(name="Quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \Film
     *
     * @ORM\ManyToOne(targetEntity="Film")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Filme", referencedColumnName="ID_Film")
     * })
     */
    private $idFilme;

    /**
     * @var \Al2000
     *
     * @ORM\ManyToOne(targetEntity="Al2000")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_AL2000", referencedColumnName="N_Machine")
     * })
     */
    private $idAl2000;

    public function getIdDvd(): ?int
    {
        return $this->idDvd;
    }

    public function getExiste(): ?bool
    {
        return $this->existe;
    }

    public function setExiste(bool $existe): self
    {
        $this->existe = $existe;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getIdFilme(): ?Film
    {
        return $this->idFilme;
    }

    public function setIdFilme(?Film $idFilme): self
    {
        $this->idFilme = $idFilme;

        return $this;
    }

    public function getIdAl2000(): ?Al2000
    {
        return $this->idAl2000;
    }

    public function setIdAl2000(?Al2000 $idAl2000): self
    {
        $this->idAl2000 = $idAl2000;

        return $this;
    }


}
