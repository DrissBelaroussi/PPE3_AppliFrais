<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'frais_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'frais_connexionV' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::formVAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexionV/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deconnexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::deconnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deconnexion/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'frais_connexionC' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::formCAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexionC/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'consulter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::getMoisVAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/consulter/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'renseignerFF' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::renseignerFFAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/renseignerFF/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'renseignerHF' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::renseignerHFAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/renseignerHF/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'renseignerHome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::renseignerHomeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/renseignerHome/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifierFF' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::modifierFFAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modifierFF/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifierHF' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::modifierHFAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modifierHF/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifierFiche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::modifierFicheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modifierFiche/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimerHF' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::supprimerHFAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimerHF/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suivreFiche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::suivreFicheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/suivreFiche/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validerFiche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::validerFicheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/validerFiche/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'detailFiche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FraisBundle\\Controller\\DefaultController::detailFicheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/detailFiche/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
