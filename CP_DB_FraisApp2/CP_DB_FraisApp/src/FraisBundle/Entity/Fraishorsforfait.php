<?php

namespace FraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fraishorsforfait
 *
 * @ORM\Table(name="FraisHorsForfait", indexes={@ORM\Index(name="FK_FraisForfait_fiche", columns={"idFiche"})})
 * @ORM\Entity(repositoryClass="FraisBundle\Entity\FraishorsforfaitRepository")
 */
class Fraishorsforfait
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=true)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var \Fichefrais
     *
     * @ORM\ManyToOne(targetEntity="Fichefrais")
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
     * Set libelle
     *
     * @param string $libelle
     * @return Fraishorsforfait
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Fraishorsforfait
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Fraishorsforfait
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set idfiche
     *
     * @param \FraisBundle\Entity\Fichefrais $idfiche
     * @return Fraishorsforfait
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
