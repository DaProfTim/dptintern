<?php

namespace AppBundle\Controller;

use AppBundle\Security\AuthenticationHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Csrf\CsrfToken;

class IndexController extends BaseController
{
    /**
     * Index-Seite.
     *
     * @param Request $request Request
     * @return Response
     * @Route(
     *     "/",
     *     name="index",
     *     host="%router.request_context.host%",
     *     options = { "expose" = true }
     * )
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();

        // CSRF Token und BasePath fuer ExtJS setzen
        $csrfToken = $this->get('security.csrf.token_manager')->getToken('npo'); /** @var $csrfToken CsrfToken */
        $session->set('ext/csrfToken', $csrfToken->getValue());

        // Bereits eingeloggte User aus Session wiederherstellen: gesetzt wird dieser vorher in AppBundle/Security/AuthenticationHandler
        if ($session->get('_security_default') != null) {
            $authHandler = $this->get('auth_handler');
            /** @var $authHandler AuthenticationHandler */
            $authHandler->reauthenticateUserFromSession($request);
        }

        return $this->render('index/index.html.twig', array(
            'title' => $this->trans('index.title'),
        ));
    }

    /**
     * Logout-Seite.
     *
     * @return Response
     * @Route(
     *     "/logout",
     *     options = { "expose" = true }
     * )
     */
    public function logoutAction()
    {
        return $this->render('index/index.html.twig', array(
            'title' => $this->trans('index.title'),
            'msg' => $this->trans('login.logged_out')
        ));
    }
}
