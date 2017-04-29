<?php

namespace FraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use FraisBundle\Entity\Visiteur;
use FraisBundle\Entity\Comptable;
use FraisBundle\Entity\Fichefrais;
use FraisBundle\Entity\Etat;
use FraisBundle\Entity\Fraishorsforfait;
use \Symfony\Component\HttpFoundation\Response;
use DateTime;
use PDO;

class DefaultController extends Controller {

    public function indexAction() {

        return $this->render('FraisBundle:Default:accueil.html.twig');
    }

    public function connexionVAction() {
        return $this->render('FraisBundle:Visiteur:ConnexionV.html.twig');
    }

    public function connexionCAction() {
        return $this->render('FraisBundle:Comptable:ConnexionC.html.twig');
    }

    public function seConnecter() {
        $pdo = $this->get('GsbFrais');

        return $pdo;
    }

    public function deconnexionAction() {

        if (isset($_SESSION['visiteur'])) {
            unset($_SESSION['visiteur']);
        }

        return $this->render('FraisBundle:Default:accueil.html.twig');
    }

    public function renseignerHomeAction() {

        $date = new DateTime($_SESSION['date']);
        $emFiche = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');
        $fiche = $emFiche->findOneBy(array('idvisiteur' => $_SESSION['idVisiteur'], 'date' => $date));

        if ($fiche) {
            return $this->render('FraisBundle:Visiteur:RenseignerHome.html.twig', array('fiche' => $fiche));
        } else {
            return $this->render('FraisBundle:Visiteur:RenseignerHome.html.twig');
        }
    }

    public function formVAction() {
        $visiteur = new Visiteur();
        $form = $this->createForm(new \FraisBundle\Form\VisiteurType(), $visiteur);

        $request = $this->container->get('request');
        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            $repository = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Visiteur');
            $unVisiteur = $repository->findOneBy(array('login' => $data->getLogin(), 'mdp' => $data->getMdp()));

            if ($unVisiteur) {

                $_SESSION['visiteur'] = $unVisiteur;
                $_SESSION['idVisiteur'] = $unVisiteur->getId();

                $date = new DateTime("now");
                $dateSQL = date_format($date, 'Y-m-d');
                $mois = substr($dateSQL, 5, 2);
                $annee = substr($dateSQL, 0, 4);
                $_SESSION['date'] = $annee . '-' . $mois . '-01';


                return $this->render('FraisBundle:Visiteur:AccueilV.html.twig', array('data' => $unVisiteur, "visiteur" => $_SESSION['visiteur']));
                //return $this->redirectToRoute('home_visiteur', array ('data' =>  $leVisiteur ) ) ;
            } else {
                return $this->render('FraisBundle:Visiteur:ConnexionV.html.twig', array('form' => $form->createView(), 'message' => 'Echec connexion. Veuillez réessayer'));
            }
        }

        if (isset($_SESSION['visiteur'])) {

            return $this->render('FraisBundle:Visiteur:AccueilV.html.twig', array("visiteur" => $_SESSION['visiteur']));
        } else {
            return $this->render('FraisBundle:Visiteur:ConnexionV.html.twig', array('form' => $form->createView(),
                        'message' => 'Veuillez vous identifier'));
        }
    }

    public function formCAction() {
        $comptable = new Comptable();
        $form = $this->createForm(new \FraisBundle\Form\ComptableType(), $comptable);

        $request = $this->container->get('request');
        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            $emComptable = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Comptable');
            $leComptable = $emComptable->findOneBy(array('login' => $data->getLogin(), 'mdp' => $data->getMdp()));

            if ($leComptable) {
                $_SESSION['comptable'] = $leComptable;
                // $_SESSION['idComptable'] = $leComptable->getId();
                //return new \Symfony\Component\HttpFoundation\Response($leComptable[0]->getNom()) ; 


                return $this->render('FraisBundle:Comptable:AccueilC.html.twig', array('comptable' => $_SESSION['comptable']));
            } else {
                return $this->render('FraisBundle:Comptable:ConnexionC.html.twig', array('form' => $form->createView(),
                            'message' => 'Echec connexion. Veuillez réessayer'));
            }
        }
        if (isset($_SESSION['comptable'])) {

            return $this->render('FraisBundle:Comptable:AccueilC.html.twig', array("visiteur" => $_SESSION['comptable']));
        } else {
            return $this->render('FraisBundle:Comptable:ConnexionC.html.twig', array('form' => $form->createView(),
                        'message' => 'Veuillez vous identifier'));
        }
    }

    // VISITEUR METHODS

    public function getMoisVAction(Request $request) {

        $visiteur = $_SESSION['visiteur'];

        $ficheForm = new Fichefrais();
        $form = $this->createForm(new \FraisBundle\Form\FichefraisType(), $ficheForm);      

       // $form->handleRequest($request);

        $request = $this->container->get('request');
        $form->handleRequest($request);

        if ($form->isValid()) {
            $date = $form->getData()->getDate();
           // return new Response( $date->format('Y-m-d'));
            
            $emFiche = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');
            $fiche = $emFiche->findOneBy(array('idvisiteur' => $visiteur, 'date' => $date));

            if ($fiche) {

                $fiche ;

                $emLigneHF = $this->getDoctrine()->getManager()->getRepository("FraisBundle:Fraishorsforfait");
                $fraisHF = $emLigneHF->findBy(array('idfiche' => $fiche));

                $em2 = $this->getDoctrine()->getManager()->getRepository("FraisBundle:Lignefraisforfait");
                $fraisF = $em2->findBy(array('idfiche' => $fiche));

                if ($fraisF && $fraisHF) {
                    return $this->render('FraisBundle:Visiteur:ficheFrais.html.twig', array('ficheFrais' => $fiche, 'fraisF' => $fraisF, 'fraisHF' => $fraisHF));
                } elseif ($fraisF) {
                    return $this->render('FraisBundle:Visiteur:ficheFrais.html.twig', array('ficheFrais' => $fiche, 'fraisF' => $fraisF));
                } elseif ($fraisHF) {
                    return $this->render('FraisBundle:Visiteur:ficheFrais.html.twig', array('ficheFrais' => $fiche, 'fraisHF' => $fraisHF));
                }
                return $this->render('FraisBundle:Visiteur:ficheFrais.html.twig', array('ficheFrais' => $fiche));
            } else {
                return $this->render('FraisBundle:Visiteur:AccueilV.html.twig', array("visiteur" => $_SESSION['visiteur'],
                            'formFiche' => $form->createView(), 'noFiche' => "Fiche Introuvable pour la date donnée, veuillez réessayer."));
            }
        }

        return $this->render('FraisBundle:Visiteur:AccueilV.html.twig', array("visiteur" => $_SESSION['visiteur'], 'formFiche' => $form->createView()));
    }

    public function modifierFFAction(Request $request) {

        $date = new DateTime("now");
        $dateSQL = date_format($date, 'Y-m-d');
        $mois = substr($dateSQL, 5, 2);
        $annee = substr($dateSQL, 0, 4);
        $dateSQL = $annee . "-" . $mois . '-01';

        $visiteur = $_SESSION['visiteur'];

        $emFiche = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');
        $ficheFrais = $emFiche->findOneBy(array('idvisiteur' => $visiteur, 'date' => new DateTime($dateSQL)));

        if ($ficheFrais) {

            $emFF = $this->getDoctrine()->getRepository('FraisBundle:Lignefraisforfait');
            $LignesFraisF = $emFF->findBy(array('idfiche' => $ficheFrais));

            $nbJustificatifs = $ficheFrais->getNbjustificatifs();
            $montant = $ficheFrais->getMontantvalide();

            $quantite = array("REP" => 0, "NUI" => 0, "ETP" => 0, "KM" => 0);
            if ($LignesFraisF) {

                foreach ($LignesFraisF as $uneLigneF) {

                    $quantite[$uneLigneF->getIdFraisforfait()->getId()] = $uneLigneF->getQuantite();
                }
            }

            $builder = $this->createFormBuilder()
                    ->add('REP', 'text', array('label' => 'Repas', 'data' => $quantite["REP"]))
                    ->add('NUI', 'text', array('label' => 'Nuitées', 'data' => $quantite["NUI"]))
                    ->add('ETP', 'text', array('label' => 'Etape', 'data' => $quantite["ETP"]))
                    ->add('KM', 'text', array('label' => 'Km', 'data' => $quantite["KM"]))
                    ->add('nbJustificatifs', 'text', array('label' => 'Nombre de justificatifs', 'data' => $nbJustificatifs))
                    ->add('montantTotal', 'text', array('label' => 'Montant total', 'data' => $montant))
                    ->add('Valider', 'submit', array('attr' => array('class' => "btn btn-lg btn-inverse", 'style' => 'margin-right:100px')))
                    ->getForm();

            $builder->handleRequest($request);



            if ($builder->isValid()) {

                $this->insertFraisForfait($builder, $ficheFrais);
            }

            return $this->render('FraisBundle:Visiteur:renseignerFiche.html.twig', array('form' => $builder->createView()));
        } else {

            $this->cloturerFiche();

            return $this->renseigner($request);
        }
    }

    public function cloturerFiche() {

        $emFicheAnnee = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');


        $queryBuilderAnnee = $emFicheAnnee->createQueryBuilder('c')
                ->select('MAX(f.date) AS max_date ')
                ->from('FraisBundle:Fichefrais', 'f')
                ->where('f.idvisiteur= :id')->setParameter('id', $_SESSION['visiteur'])
                ->getQuery()
                ->getResult();


        $datePreced = $queryBuilderAnnee[0]['max_date'];

        $emFicheLast = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');
        $ficheModif = $emFicheLast->findOneBy(array('idvisiteur' => $_SESSION['visiteur'], 'date' => new DateTime($datePreced)));

        if ($ficheModif) {
            $emEtat = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Etat');
            $etat = $emEtat->find("CL");

            $ficheModif->setIdEtat($etat);

            $this->getDoctrine()->getEntityManager()->persist($ficheModif);
            $this->getDoctrine()->getEntityManager()->flush();
        }
    }

    public function renseigner(Request $request) {

        $today = new DateTime("now");
        $dateSQL = date_format($today, 'Y-m-d');
        $mois = substr($dateSQL, 5, 2);
        $annee = substr($dateSQL, 0, 4);
        $date = $annee . "-" . $mois . '-01';

        $ficheFrais = new Fichefrais();

        $form = $this->createFormBuilder()
                ->add('REP', 'text', array('label' => 'Repas'))
                ->add('NUI', 'text', array('label' => 'Nuitées'))
                ->add('ETP', 'text', array('label' => 'Etape'))
                ->add('KM', 'text', array('label' => 'Km'))
                ->add('nbJustificatifs', 'text', array('label' => 'Nombre de justificatifs'))
                ->add('montantTotal', 'text', array('label' => 'Montant total'))
                ->add('Valider', 'submit', array('attr' => array('class' => "btn btn-lg btn-inverse", 'style' => 'margin-right:100px')))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $ficheFrais->setDate(new DateTime($date));
            $this->insertFraisForfait($form, $ficheFrais);
        }


        return $this->render('FraisBundle:Visiteur:renseignerFiche.html.twig', array('form' => $form->createView()));
    }

    public function insertFraisForfait($builder, $ficheFrais) {

        $ficheFrais->setNbjustificatifs($builder['nbJustificatifs']->getData());
        $ficheFrais->setMontantvalide($builder['montantTotal']->getData());
        $ficheFrais->setDatemodif(new \DateTime(date("Y-m-d")));

        $emVisiteur = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Visiteur');
        $visiteur = $emVisiteur->find($_SESSION['idVisiteur']);
        $ficheFrais->setIdVisiteur($visiteur);

        $emEtat = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Etat');
        $unEtat = $emEtat->find("CR");
        $ficheFrais->setIdEtat($unEtat);

        $this->getDoctrine()->getEntityManager()->persist($ficheFrais);
        $this->getDoctrine()->getEntityManager()->flush();

        $emLigneFraisF = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Lignefraisforfait');
        $ligneFraisF = $emLigneFraisF->findBy(array('idfiche' => $ficheFrais));

        if ($ligneFraisF) {
            foreach ($ligneFraisF as $uneLigne) {
                $uneLigne->setQuantite($builder[$uneLigne->getIdFraisforfait()->getId()]->getData());
                $this->getDoctrine()->getEntityManager()->persist($uneLigne);
                $this->getDoctrine()->getEntityManager()->flush();
            }
        } else {

            $emFrais = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fraisforfait');
            $fraisForfait = $emFrais->findAll();

            foreach ($fraisForfait as $unFraisForfait) {
                $LigneFraisF = new \FraisBundle\Entity\Lignefraisforfait();

                $LigneFraisF->setIdfiche($ficheFrais);
                $LigneFraisF->setIdFraisforfait($unFraisForfait);
                $LigneFraisF->setQuantite($builder[$unFraisForfait->getId()]->getData());

                $this->getDoctrine()->getEntityManager()->persist($LigneFraisF);
                $this->getDoctrine()->getEntityManager()->flush();
            }
        }
    }

    public function renseignerHFAction() {

        $dateT = new DateTime("now");
        $dateSQL = date_format($dateT, 'Y-m-d');
        $mois = substr($dateSQL, 5, 2);
        $annee = substr($dateSQL, 0, 4);
        $date = $annee . "-" . $mois . '-01';

        $emVisiteur = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Visiteur');
        $visiteur = $emVisiteur->find($_SESSION['idVisiteur']);

        $emFiche = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');
        $fiche = $emFiche->findOneBy(array('date' => new DateTime($date), 'idvisiteur' => $visiteur));

        $LigneHF = new Fraishorsforfait();
        $form = $this->createForm(new \FraisBundle\Form\FraishorsforfaitType(), $LigneHF);

        $request = $this->container->get('request');
        $form->handleRequest($request);



        $dateOk = true;
        if ($fiche) {
            if ($form->isValid()) {

                $interval = ($dateT->diff($form->getData()->getDate())->format('%R%a days'));

                if ($interval <= 0 && $interval >= -365) {

                    $date = date_format($form->getData()->getDate(), 'Y-m-d');
                    $LigneHF->setIdFiche($fiche);
                    $this->getDoctrine()->getEntityManager()->persist($LigneHF);
                    $this->getDoctrine()->getEntityManager()->flush();
                } else {
                    $dateOk = false;
                }
            }


            $emLigneHF = $this->getDoctrine()->getManager()->getRepository("FraisBundle:Fraishorsforfait");
            $LignesHF = $emLigneHF->findBy(array('idfiche' => $fiche));

//        if (!$LignesHF) {
//                return $this->redirectToRoute('renseignerHF') ;
//                //return $this->render('FraisBundle:Visiteur:RenseignerFicheHF.html.twig', array('form' => $form->createView()));
//            }
        } else {
            return $this->redirectToRoute('modifierFF');
        }
        if ($dateOk == false) {
            return $this->render('FraisBundle:Visiteur:RenseignerFicheHF.html.twig', array('fraisHF' => $LignesHF, 'form' => $form->createView(),
                        'alert' => "La date ne doit ni être antérieure à plus d'un an, ni supérieure à la date du jour."));
        } else {
            return $this->render('FraisBundle:Visiteur:RenseignerFicheHF.html.twig', array('fraisHF' => $LignesHF, 'form' => $form->createView()));
        }

        //
    }

    public function supprimerHFAction() {
        $date = new DateTime("now");
        $dateSQL = date_format($date, 'Y-m-d');
        $mois = substr($dateSQL, 5, 2);
        $annee = substr($dateSQL, 0, 4);

        $idFraisHF = $this->get('request')->request->get('idFraisHF');

//        $emFraisHF = $this->getDoctrine()->getManager()->getRepository("FraisBundle:Fraishorsforfait");
//        $LigneHF = $emFraisHF->deleteContenir($_SESSION['idVisiteur'], $annee . "-" . $mois . '-01', $idFraisHF);

        $emLigneHF = $this->getDoctrine()->getManager()->getRepository("FraisBundle:Fraishorsforfait");
        $LigneHF = $emLigneHF->deleteFraisHF($idFraisHF);

        return $this->redirectToRoute('renseignerHF');
    }

    // COMPTABLE METHODS

    public function suivreFicheAction() {

        $emFiche = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');
        $ficheVA = $emFiche->getFicheAttente();

        $ficheForm = new Fichefrais();
        $form = $this->createForm(new \FraisBundle\Form\FichefraisType(), $ficheForm);
        $form->add('idvisiteur', 'entity', array('class' => 'FraisBundle\Entity\Visiteur', 'property' => 'nom'));

        $request = $this->container->get('request');
        $form->handleRequest($request);

        if ($form->isValid()) {
            $date = $form->getData()->getDate();
            $visiteur = $form->getData()->getIdvisiteur();
            $emFiche = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');
            $Lesfiches = $emFiche->findBy(array('idvisiteur' => $visiteur, 'date' => $date));

            if ($Lesfiches) {

                return $this->render('FraisBundle:Comptable:SuivrePaiements.html.twig', array('form' => $form->createView(),
                            'ficheVA' => $Lesfiches));
            } else {
                return $this->render('FraisBundle:Comptable:SuivrePaiements.html.twig', array('form' => $form->createView(), 'message' => 'Aucune fiche pour ce visiteur à cette date.'));
            }
        }
        return $this->render('FraisBundle:Comptable:SuivrePaiements.html.twig', array('form' => $form->createView()));
        //  return $this->render('FraisBundle:Comptable:SuivrePaiements.html.twig', array('ficheVA' => $ficheVA));
    }

    public function detailFicheAction() {

        $idFiche = $this->get('request')->request->get('idFiche');


        $emFiche = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');
        $fiche = $emFiche->find($idFiche);

        $emFraisF = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Lignefraisforfait');
        $fraisF = $emFraisF->findBy(array('idfiche' => $fiche));


        $emFraisHF = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fraishorsforfait');
        $fraisHF = $emFraisHF->findBy(array('idfiche' => $fiche));



        if ($fraisHF && $fraisF) {

            return $this->render('FraisBundle:Comptable:DetailFrais.html.twig', array('fiche' => $fiche, 'fraisForfait' => $fraisF,
                        'fraisHorsForfait' => $fraisHF));
        } elseif ($fraisF) {

            return $this->render('FraisBundle:Comptable:DetailFrais.html.twig', array('fiche' => $fiche, 'fraisForfait' => $fraisF
            ));
        } else {
            return $this->render('FraisBundle:Comptable:DetailFrais.html.twig', array('fiche' => $fiche));
        }
    }

    public function misePaiementAction() {

        $idFiche = $this->get('request')->request->get('idFiche');
        $emFiche = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');
        $fiche = $emFiche->find($idFiche);

        $emEtat = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Etat');
        $etat = $emEtat->find('VA');

        $fiche->setDatemodif(new DateTime('now'));
        $fiche->setIdetat($etat);

        $this->getDoctrine()->getEntityManager()->persist($fiche);
        $this->getDoctrine()->getEntityManager()->flush();


        return $this->redirectToRoute('suivreFiche');
    }

    public function validerFicheAction() {
        $emFiche = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');
        $ficheVA = $emFiche->getFicheAttente();

        $ficheForm = new Fichefrais();
        $form = $this->createForm(new \FraisBundle\Form\FichefraisType(), $ficheForm);
        $form->add('idvisiteur', 'entity', array('class' => 'FraisBundle\Entity\Visiteur', 'property' => 'nom'));

        $request = $this->container->get('request');
        $form->handleRequest($request);

        if ($form->isValid()) {
            $date = $form->getData()->getDate();
            $visiteur = $form->getData()->getIdvisiteur();
            $emFiche = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');
            $Lesfiches = $emFiche->findBy(array('idvisiteur' => $visiteur, 'date' => $date));

            if ($Lesfiches) {

                return $this->render('FraisBundle:Comptable:ValiderFiche.html.twig', array('form' => $form->createView(),
                            'ficheVA' => $Lesfiches));
            } else {
                return $this->render('FraisBundle:Comptable:ValiderFiche.html.twig', array('form' => $form->createView(), 'message' => 'Aucune fiche pour ce visiteur à cette date.'));
            }
        }


        return $this->render('FraisBundle:Comptable:ValiderFiche.html.twig', array('form' => $form->createView()));
    }

    public function detailFicheModifAction() {
        $idFiche = $this->get('request')->request->get('idFiche');


        $emFiche = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fichefrais');
        $fiche = $emFiche->find($idFiche);

        $emFraisF = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Lignefraisforfait');
        $fraisF = $emFraisF->findBy(array('idfiche' => $fiche));


        $emFraisHF = $this->getDoctrine()->getManager()->getRepository('FraisBundle:Fraishorsforfait');
        $fraisHF = $emFraisHF->findBy(array('idfiche' => $fiche));

        // faire des formulaires : 



        if ($fraisHF && $fraisF) {

            return $this->render('FraisBundle:Comptable:DetailFicheModif.html.twig', array('fiche' => $fiche, 'fraisForfait' => $fraisF,
                        'fraisHorsForfait' => $fraisHF));
        } elseif ($fraisF) {

            return $this->render('FraisBundle:Comptable:DetailFicheModif.html.twig', array('fiche' => $fiche, 'fraisForfait' => $fraisF
            ));
        } else {
            return $this->render('FraisBundle:Comptable:DetailFicheModif.html.twig', array('fiche' => $fiche));
        }
    }

}
