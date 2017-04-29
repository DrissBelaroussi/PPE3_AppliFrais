<?php

namespace FraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignefraisforfait
 *
 * @ORM\Table(name="LigneFraisForfait", indexes={@ORM\Index(name="FK_LigneFraisForfait_id_FraisForfait", columns={"id_FraisForfait"}), @ORM\Index(name="FK_LigneFraisForfait_fiche", columns={"idFiche"})})
 * @ORM\Entity(repositoryClass="FraisBundle\Entity\LignefraisforfaitRepository")
 */
class Lignefraisforfait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var \Fraisforfait
     *
     * @ORM\ManyToOne(targetEntity="Fraisforfait",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_FraisForfait", referencedColumnName="id")
     * })
     */
    private $idFraisforfait;

    /**
     * @var \Fichefrais
     *
     * @ORM\ManyToOne(targetEntity="Fichefrais" ,cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFiche", referencedColumnName="id")
     * })
     */
    private $idfiche;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Lignefraisforfait
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set idFraisforfait
     *
     * @param \FraisBundle\Entity\Fraisforfait $idFraisforfait
     * @return Lignefraisforfait
     */
    public function setIdFraisforfait(\FraisBundle\Entity\Fraisforfait $idFraisforfait = null)
    {
        $this->idFraisforfait = $idFraisforfait;

        return $this;
    }

    /**
     * Get idFraisforfait
     *
     * @return \FraisBundle\Entity\Fraisforfait 
     */
    public function getIdFraisforfait()
    {
        return $this->idFraisforfait;
    }

    /**
     * Set idfiche
     *
     * @param \FraisBundle\Entity\Fichefrais $idfiche
     * @return Lignefraisforfait
     */
    public function setIdfiche(\FraisBundle\Entity\Fichefrais $idfiche = null)
    {
        $this->idfiche = $idfiche;

        return $this;
    }

    /**
     * Get idfiche
     *
     * @return \FraisBundle\Entity\Fichefrais 
     */
    public function getIdfiche()
    {
        return $this->idfiche;
    }
}
