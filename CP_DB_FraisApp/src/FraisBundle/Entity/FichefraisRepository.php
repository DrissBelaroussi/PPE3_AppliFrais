<?php

namespace FraisBundle\Entity;

use Doctrine\ORM\EntityRepository;
use FraisBundle\Entity\PrimaryDateTime ; 
/**
 * FichefraisRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FichefraisRepository extends EntityRepository {

    public function getFicheFrais($idVisiteur, $date) {
        
        
    //$dateSQL = new \DateTime($date);
        $queryBuilder = $this->_em->createQueryBuilder()->select('f')->from($this->_entityName, 'f');
        $queryBuilder->where('f.id= :id')->setParameter('id', $idVisiteur)
                ->andWhere('f.date = :date')->setParameter('date',  $date);

        $return = $queryBuilder->getQuery()->getResult();

//        $queryBuilder = $this->_em->createQueryBuilder() ; 
//        $queryBuilder ->select('f')->from($this->_entityName, 'f') 
//                ->innerJoin('f', 'LigneFraisForfait', 'lfh', 'f. = p.user_id');
//                ->where('f.idvisiteur= :idvisiteur')->setParameter('idvisiteur' , $idVisiteur)
//                ->andWhere('f.mois = :mois')->setParameter('mois', $mois) ;
//        
//        $return = $queryBuilder->getQuery()->getResult()  ;


        if ($return ) {
            return $return;
        } else {
            return false;
        }
    }

    public function getIdEtat($idVisiteur, $mois, $annee) {

        $queryBuilder = $this->_em->createQueryBuilder()->select('f')->from($this->_entityName, 'f');
        $queryBuilder->where('f.id= :id')->setParameter('id', $idVisiteur)
                ->andWhere('f.mois = :mois')->setParameter('mois', $mois)
                ->andWhere('f.annee = :annee')->setParameter('annee', $annee);

        $lesFiches = $queryBuilder->getQuery()->getResult();

        foreach ($lesFiches as $uneFiche) {
            $uneFiche->getIdetat();
        }
        if (count($lesFiches) > 0) {
            return $uneFiche;
        } else {
            return false;
        }
    }

    public function getFiche($idVisiteur, $mois, $annee) {

        $queryBuilder = $this->_em->createQueryBuilder()->select('f')->from($this->_entityName, 'f');
        $queryBuilder->where('f.id= :id')->setParameter('id', $idVisiteur)
                ->andWhere('f.mois = :mois')->setParameter('mois', $mois)
                ->andWhere('f.annee = :annee')->setParameter('annee', $annee);

        $lesFiches = $queryBuilder->getQuery()->getResult();




        if (count($lesFiches) > 0) {
            return $lesFiches;
        } else {
            return false;
        }
    }
    
    public function getFicheAttente(){
        
         $queryBuilder = $this->_em->createQueryBuilder()->select('f')->from($this->_entityName, 'f');
        $queryBuilder
                ->where('f.idEtat = :idEtat')->setParameter('idEtat','CL') ;            

        $lesFiches = $queryBuilder->getQuery()->getResult();




        if (count($lesFiches) > 0) {
            return $lesFiches;
        } else {
            return false;
        }
    }

   

}
