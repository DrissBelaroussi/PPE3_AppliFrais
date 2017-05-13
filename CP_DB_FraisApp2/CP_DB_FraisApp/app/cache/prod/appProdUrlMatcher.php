<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // frais_homepage
        if (rtrim($pathinfo, '/') === '/home') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'frais_homepage');
            }

            return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::indexAction',  '_route' => 'frais_homepage',);
        }

        // frais_connexionV
        if (rtrim($pathinfo, '/') === '/connexionV') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'frais_connexionV');
            }

            return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::formVAction',  '_route' => 'frais_connexionV',);
        }

        // deconnexion
        if (rtrim($pathinfo, '/') === '/deconnexion') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'deconnexion');
            }

            return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::deconnexionAction',  '_route' => 'deconnexion',);
        }

        if (0 === strpos($pathinfo, '/con')) {
            // frais_connexionC
            if (rtrim($pathinfo, '/') === '/connexionC') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'frais_connexionC');
                }

                return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::formCAction',  '_route' => 'frais_connexionC',);
            }

            // consulter
            if (rtrim($pathinfo, '/') === '/consulter') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'consulter');
                }

                return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::getMoisVAction',  '_route' => 'consulter',);
            }

        }

        if (0 === strpos($pathinfo, '/renseigner')) {
            // renseignerFF
            if (rtrim($pathinfo, '/') === '/renseignerFF') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'renseignerFF');
                }

                return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::renseignerFFAction',  '_route' => 'renseignerFF',);
            }

            if (0 === strpos($pathinfo, '/renseignerH')) {
                // renseignerHF
                if (rtrim($pathinfo, '/') === '/renseignerHF') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'renseignerHF');
                    }

                    return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::renseignerHFAction',  '_route' => 'renseignerHF',);
                }

                // renseignerHome
                if (rtrim($pathinfo, '/') === '/renseignerHome') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'renseignerHome');
                    }

                    return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::renseignerHomeAction',  '_route' => 'renseignerHome',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/modifier')) {
            // modifierFF
            if (rtrim($pathinfo, '/') === '/modifierFF') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'modifierFF');
                }

                return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::modifierFFAction',  '_route' => 'modifierFF',);
            }

            // modifierHF
            if (rtrim($pathinfo, '/') === '/modifierHF') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'modifierHF');
                }

                return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::modifierHFAction',  '_route' => 'modifierHF',);
            }

            // modifierFiche
            if (rtrim($pathinfo, '/') === '/modifierFiche') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'modifierFiche');
                }

                return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::modifierFicheAction',  '_route' => 'modifierFiche',);
            }

        }

        if (0 === strpos($pathinfo, '/su')) {
            // supprimerHF
            if (rtrim($pathinfo, '/') === '/supprimerHF') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supprimerHF');
                }

                return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::supprimerHFAction',  '_route' => 'supprimerHF',);
            }

            // suivreFiche
            if (rtrim($pathinfo, '/') === '/suivreFiche') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'suivreFiche');
                }

                return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::suivreFicheAction',  '_route' => 'suivreFiche',);
            }

        }

        // validerFiche
        if (rtrim($pathinfo, '/') === '/validerFiche') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'validerFiche');
            }

            return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::validerFicheAction',  '_route' => 'validerFiche',);
        }

        // detailFiche
        if (rtrim($pathinfo, '/') === '/detailFiche') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'detailFiche');
            }

            return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::detailFicheAction',  '_route' => 'detailFiche',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
