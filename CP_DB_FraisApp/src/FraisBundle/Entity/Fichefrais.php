<?php

namespace FraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichefrais
 *
 * @ORM\Table(name="FicheFrais", indexes={@ORM\Index(name="FK_FicheFrais_id_Visiteur", columns={"idVisiteur"}), @ORM\Index(name="FK_FicheFrais_id_Etat", columns={"id_Etat"})})
 * @ORM\Entity(repositoryClass="FraisBundle\Entity\FichefraisRepository")
 */
class Fichefrais
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbJustificatifs", type="integer", nullable=true)
     */
    private $nbjustificatifs;

    /**
     * @var string
     *
     * @ORM\Column(name="montantValide", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $montantvalide;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModif", type="date", nullable=true)
     */
    private $datemodif;

    /**
     * @var \Etat
     *
     * @ORM\ManyToOne(targetEntity="Etat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Etat", referencedColumnName="id")
     * })
     */
    private $idEtat;

    /**
     * @var \Visiteur
     *
     * @ORM\ManyToOne(targetEntity="Visiteur" ,cascade={"persist"}))
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVisiteur", referencedColumnName="id")
     * })
     */
    private $idvisiteur;



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
     * Set date
     *
     * @param \DateTime $date
     * @return Fichefrais
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
     * Set nbjustificatifs
     *
     * @param integer $nbjustificatifs
     * @return Fichefrais
     */
    public function setNbjustificatifs($nbjustificatifs)
    {
        $this->nbjustificatifs = $nbjustificatifs;

        return $this;
    }

    /**
     * Get nbjustificatifs
     *
     * @return integer 
     */
    public function getNbjustificatifs()
    {
        return $this->nbjustificatifs;
    }

    /**
     * Set montantvalide
     *
     * @param string $montantvalide
     * @return Fichefrais
     */
    public function setMontantvalide($montantvalide)
    {
        $this->montantvalide = $montantvalide;

        return $this;
    }

    /**
     * Get montantvalide
     *
     * @return string 
     */
    public function getMontantvalide()
    {
        return $this->montantvalide;
    }

    /**
     * Set datemodif
     *
     * @param \DateTime $datemodif
     * @return Fichefrais
     */
    public function setDatemodif($datemodif)
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    /**
     * Get datemodif
     *
     * @return \DateTime 
     */
    public function getDatemodif()
    {
        return $this->datemodif;
    }

    /**
     * Set idEtat
     *
     * @param \FraisBundle\Entity\Etat $idEtat
     * @return Fichefrais
     */
    public function setIdEtat(\FraisBundle\Entity\Etat $idEtat = null)
    {
        $this->idEtat = $idEtat;

        return $this;
    }

    /**
     * Get idEtat
     *
     * @return \FraisBundle\Entity\Etat 
     */
    public function getIdEtat()
    {
        return $this->idEtat;
    }

    /**
     * Set idvisiteur
     *
     * @param \FraisBundle\Entity\Visiteur $idvisiteur
     * @return Fichefrais
     */
    public function setIdvisiteur(\FraisBundle\Entity\Visiteur $idvisiteur = null)
    {
        $this->idvisiteur = $idvisiteur;

        return $this;
    }

    /**
     * Get idvisiteur
     *
     * @return \FraisBundle\Entity\Visiteur 
     */
    public function getIdvisiteur()
    {
        return $this->idvisiteur;
    }
    
     public function __toString() {
        return $this->getId() ;
    }
}
