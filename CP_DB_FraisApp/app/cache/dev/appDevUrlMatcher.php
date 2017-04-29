<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/3584534')) {
            // _assetic_3584534
            if ($pathinfo === '/css/3584534.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 3584534,  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3584534',);
            }

            if (0 === strpos($pathinfo, '/css/3584534_part_1_')) {
                if (0 === strpos($pathinfo, '/css/3584534_part_1_bootstrap')) {
                    // _assetic_3584534_0
                    if ($pathinfo === '/css/3584534_part_1_bootstrap-theme.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 3584534,  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3584534_0',);
                    }

                    // _assetic_3584534_1
                    if ($pathinfo === '/css/3584534_part_1_bootstrap.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 3584534,  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_3584534_1',);
                    }

                }

                // _assetic_3584534_2
                if ($pathinfo === '/css/3584534_part_1_style_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 3584534,  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_3584534_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

        if (0 === strpos($pathinfo, '/modifierF')) {
            // modifierFF
            if (rtrim($pathinfo, '/') === '/modifierFF') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'modifierFF');
                }

                return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::modifierFFAction',  '_route' => 'modifierFF',);
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

        // misePaiement
        if (rtrim($pathinfo, '/') === '/misePaiement') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'misePaiement');
            }

            return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::misePaiementAction',  '_route' => 'misePaiement',);
        }

        // detailFicheModif
        if (rtrim($pathinfo, '/') === '/detailFicheModif') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'detailFicheModif');
            }

            return array (  '_controller' => 'FraisBundle\\Controller\\DefaultController::detailFicheModifAction',  '_route' => 'detailFicheModif',);
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
