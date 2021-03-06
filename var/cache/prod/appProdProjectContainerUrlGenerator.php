<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'npoa_security_auth_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Npoa\\SecurityBundle\\Controller\\AuthController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_npoa_security/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'npoa_security_auth_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Npoa\\SecurityBundle\\Controller\\AuthController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_npoa_security/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'npoa_security_config_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Npoa\\SecurityBundle\\Controller\\ConfigController::import',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_npoa_security/config/import',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'npoa_security_config_setignore' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Npoa\\SecurityBundle\\Controller\\ConfigController::setIgnore',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_npoa_security/config/set_ignore',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'npoa_security_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Npoa\\SecurityBundle\\Controller\\CtrlActPermissionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_npoa_security/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'npoa_security_ctrlactpermission_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Npoa\\SecurityBundle\\Controller\\CtrlActPermissionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_npoa_security/ctrlactpermission',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'npoa_security_ctrlactpermission_update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Npoa\\SecurityBundle\\Controller\\CtrlActPermissionController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_npoa_security/ctrlactpermission/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'npoa_security_entitypermission_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Npoa\\SecurityBundle\\Controller\\EntityPermissionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_npoa_security/entitypermission',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'npoa_security_entitypermission_update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Npoa\\SecurityBundle\\Controller\\EntityPermissionController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_npoa_security/entitypermission/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_benutzer_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BenutzerController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/benutzer/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_benutzer_setpasswordcheck' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BenutzerController::setPasswordCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/benutzer/set_password_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_benutzer_sendresettoken' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BenutzerController::sendResetTokenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/benutzer/send_reset_token',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_benutzer_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BenutzerController::confirmAction',  ),  2 =>   array (    'token' => '[0-9a-zA-Z]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9a-zA-Z]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/benutzer/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_benutzer_getown' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BenutzerController::getOwnAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/benutzer/get_own',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_benutzer_settmpemail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BenutzerController::setTmpEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/benutzer/set_tmp_email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_benutzer_update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BenutzerController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/benutzer/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_benutzer_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BenutzerController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/benutzer/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\IndexController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'localhost',    ),  ),  5 =>   array (  ),),
        'app_index_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\IndexController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
