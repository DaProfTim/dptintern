<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
