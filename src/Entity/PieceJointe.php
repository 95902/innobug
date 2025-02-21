<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PieceJointe
 *
 * @ORM\Table(name="piece_jointe", indexes={@ORM\Index(name="idRapport", columns={"idRapport"})})
 * @ORM\Entity
 */
class PieceJointe
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPj", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_pj", type="string", length=50, nullable=true)
     */
    private $urlPj;

    /**
     * @var int
     *
     * @ORM\Column(name="idRapport", type="integer", nullable=false)
     */
    private $idrapport;

    public function getIdpj(): ?int
    {
        return $this->idpj;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getUrlPj(): ?string
    {
        return $this->urlPj;
    }

    public function setUrlPj(?string $urlPj): self
    {
        $this->urlPj = $urlPj;

        return $this;
    }

    public function getIdrapport(): ?int
    {
        return $this->idrapport;
    }

    public function setIdrapport(int $idrapport): self
    {
        $this->idrapport = $idrapport;

        return $this;
    }


}
