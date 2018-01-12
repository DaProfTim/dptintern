<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            if (0 === strpos($pathinfo, '/_npoa_security')) {
                if (0 === strpos($pathinfo, '/_npoa_security/log')) {
                    // npoa_security_auth_login
                    if ($pathinfo === '/_npoa_security/login') {
                        return array (  '_controller' => 'Npoa\\SecurityBundle\\Controller\\AuthController::loginAction',  '_route' => 'npoa_security_auth_login',);
                    }

                    // npoa_security_auth_logout
                    if ($pathinfo === '/_npoa_security/logout') {
                        return array (  '_controller' => 'Npoa\\SecurityBundle\\Controller\\AuthController::logoutAction',  '_route' => 'npoa_security_auth_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/_npoa_security/config')) {
                    // npoa_security_config_import
                    if ($pathinfo === '/_npoa_security/config/import') {
                        return array (  '_controller' => 'Npoa\\SecurityBundle\\Controller\\ConfigController::import',  '_route' => 'npoa_security_config_import',);
                    }

                    // npoa_security_config_setignore
                    if ($pathinfo === '/_npoa_security/config/set_ignore') {
                        return array (  '_controller' => 'Npoa\\SecurityBundle\\Controller\\ConfigController::setIgnore',  '_route' => 'npoa_security_config_setignore',);
                    }

                }

                // npoa_security_index
                if (rtrim($pathinfo, '/') === '/_npoa_security') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'npoa_security_index');
                    }

                    return array (  '_controller' => 'Npoa\\SecurityBundle\\Controller\\CtrlActPermissionController::indexAction',  '_route' => 'npoa_security_index',);
                }

                if (0 === strpos($pathinfo, '/_npoa_security/ctrlactpermission')) {
                    // npoa_security_ctrlactpermission_index
                    if ($pathinfo === '/_npoa_security/ctrlactpermission') {
                        return array (  '_controller' => 'Npoa\\SecurityBundle\\Controller\\CtrlActPermissionController::indexAction',  '_route' => 'npoa_security_ctrlactpermission_index',);
                    }

                    // npoa_security_ctrlactpermission_update
                    if ($pathinfo === '/_npoa_security/ctrlactpermission/update') {
                        return array (  '_controller' => 'Npoa\\SecurityBundle\\Controller\\CtrlActPermissionController::updateAction',  '_route' => 'npoa_security_ctrlactpermission_update',);
                    }

                }

                if (0 === strpos($pathinfo, '/_npoa_security/entitypermission')) {
                    // npoa_security_entitypermission_index
                    if ($pathinfo === '/_npoa_security/entitypermission') {
                        return array (  '_controller' => 'Npoa\\SecurityBundle\\Controller\\EntityPermissionController::indexAction',  '_route' => 'npoa_security_entitypermission_index',);
                    }

                    // npoa_security_entitypermission_update
                    if ($pathinfo === '/_npoa_security/entitypermission/update') {
                        return array (  '_controller' => 'Npoa\\SecurityBundle\\Controller\\EntityPermissionController::updateAction',  '_route' => 'npoa_security_entitypermission_update',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/benutzer')) {
            // app_benutzer_logout
            if ($pathinfo === '/benutzer/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\BenutzerController::logoutAction',  '_route' => 'app_benutzer_logout',);
            }

            if (0 === strpos($pathinfo, '/benutzer/se')) {
                // app_benutzer_setpasswordcheck
                if ($pathinfo === '/benutzer/set_password_check') {
                    return array (  '_controller' => 'AppBundle\\Controller\\BenutzerController::setPasswordCheckAction',  '_route' => 'app_benutzer_setpasswordcheck',);
                }

                // app_benutzer_sendresettoken
                if ($pathinfo === '/benutzer/send_reset_token') {
                    return array (  '_controller' => 'AppBundle\\Controller\\BenutzerController::sendResetTokenAction',  '_route' => 'app_benutzer_sendresettoken',);
                }

            }

            // app_benutzer_confirm
            if (0 === strpos($pathinfo, '/benutzer/confirm') && preg_match('#^/benutzer/confirm/(?P<token>[0-9a-zA-Z]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_benutzer_confirm')), array (  '_controller' => 'AppBundle\\Controller\\BenutzerController::confirmAction',));
            }

            // app_benutzer_getown
            if ($pathinfo === '/benutzer/get_own') {
                return array (  '_controller' => 'AppBundle\\Controller\\BenutzerController::getOwnAction',  '_route' => 'app_benutzer_getown',);
            }

            // app_benutzer_settmpemail
            if ($pathinfo === '/benutzer/set_tmp_email') {
                return array (  '_controller' => 'AppBundle\\Controller\\BenutzerController::setTmpEmailAction',  '_route' => 'app_benutzer_settmpemail',);
            }

            // app_benutzer_update
            if ($pathinfo === '/benutzer/update') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_benutzer_update;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\BenutzerController::updateAction',  '_route' => 'app_benutzer_update',);
            }
            not_app_benutzer_update:

            // app_benutzer_delete
            if ($pathinfo === '/benutzer/delete') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_benutzer_delete;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\BenutzerController::deleteAction',  '_route' => 'app_benutzer_delete',);
            }
            not_app_benutzer_delete:

        }

        $host = $this->context->getHost();

        if (preg_match('#^localhost$#si', $host, $hostMatches)) {
            // index
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\IndexController::indexAction',  '_route' => 'index',);
            }

        }

        // app_index_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'AppBundle\\Controller\\IndexController::logoutAction',  '_route' => 'app_index_logout',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array('_route' => 'login_check');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
