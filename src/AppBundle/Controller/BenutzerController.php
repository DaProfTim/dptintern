<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AccessControl\Benutzer;
use AppBundle\Entity\AccessControl\BenutzerRepository;
use AppBundle\Exception\ExistsException;
use AppBundle\Exception\TokenExpiredException;
use AppBundle\Exception\TokenInvalidException;
use AppBundle\Exception\UserSelfRemoveException;
use AppBundle\Form\AccessControl\BenutzerType;
use AppBundle\Security\AuthenticationHandler;
use AppBundle\Service\BenutzerService;
use AppBundle\Utils\JsonResponse;
use AppBundle\Utils\SymfonyUtils;
use Doctrine\ORM\EntityNotFoundException;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class BenutzerController extends BaseController
{
    /**
     * Logt einen Benutzer aus.
     *
     * @param Request $request
     * @return JsonResponse
     * @Route(
     *      "/benutzer/logout",
     *      options = { "expose" = true }
     * )
     */
    public function logoutAction(Request $request)
    {
        $session = $request->getSession();
        $this->get('security.token_storage')->setToken(null);
        $session->invalidate();
        $session->clear();
        $response = array(
            'success' => true,
            'msg' => $this->trans('login.logout_success')
        );

        return $this->jsonResponse($response);
    }

    /**
     * Ueberprueft die eingegebenen Passwoerter und setzt dann das Passwort fuer den eingeloggten Benutzer entsprechend um.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request Request
     * @return Response
     * @Route(
     *      "/benutzer/set_password_check",
     *      options = { "expose" = true }
     * )
     */
    public function setPasswordCheckAction(Request $request)
    {
        $response = array(
            'success' => false
        );
        $password = $request->get('password');
        $passwordNew = $request->get('passwordNew');
        $passwordNew2 = $request->get('passwordNew2');
        $csrfToken = $request->get('_token');

        if (!$this->isCsrfValid($csrfToken)) {
            $response['error'] = $this->trans('global.csrf_token_invalid');
        }
        try {
            $benutzerService = $this->get('benutzer_service'); /** @var $benutzerService BenutzerService */
            $benutzerService->setPassword($this->getUser(), $passwordNew, $passwordNew2, $password);
            $request->getSession()->remove('ext/setPassword');
            $response['success'] = true;
        } catch (Exception $exception) {
            $response['error'] = $this->trans($exception->getMessage());
        }

        return $this->jsonResponse($response);
    }

    /**
     * Sendet einen neuen Passwort-Zuruecksetz-Token (RegToken) an die angegebene E-Mail Adresse, sofern ein Benutzer dazu existiert.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request Request
     * @return Response
     * @Route(
     *      "/benutzer/send_reset_token",
     *      options = { "expose" = true }
     * )
     */
    public function sendResetTokenAction(Request $request)
    {
        $response = array(
            'success' => false,
            'errors' => array()
        );
        $email = $request->get('email');
        $csrfToken = $request->get('_token');

        if (!$this->isCsrfValid($csrfToken)) {
            $response['errors'][] = $this->trans('global.csrf_token_invalid');
        }
        try {
            $benutzerService = $this->get('benutzer_service'); /** @var $benutzerService BenutzerService */
            $benutzerService->setAndSendResetToken($email);
            $response['success'] = true;
        } catch (Exception $exception) {
            $response['errors']['email'] = $this->trans($exception->getMessage());
        }

        return $this->jsonResponse($response);
    }

    /**
     * Bestaetigt eine der folgenden Anforderungen ueber den gueltigen ResetToken:
     *  - Passwort-Zuruecksetz-Anforderun
     *  - Registrierung eines Benutzers
     *  - Aenderung der E-Mail Adresse
     *
     * @param Request $request Request
     * @param string $token Authentisierungs-Token
     * @return Response
     * @Route(
     *      "/benutzer/confirm/{token}",
     *      requirements = { "token" = "[0-9a-zA-Z]+" },
     *      options = { "expose" = true }
     * )
     */
    public function confirmAction(Request $request, $token)
    {
        if (!empty($this->getUser())) {
            $urlOnError = str_replace('/#', '#', $this->generateUrl('index') . '#eigene-daten');
        } else {
            $urlOnError = str_replace('/#', '#', $this->generateUrl('index') . '#passwort-vergessen');
        }
        try {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('AppBundle:AccessControl\Benutzer')->findOneBy(array('resetToken' => $token)); /** @var $user Benutzer */
            if (!$user instanceof Benutzer) {
                return $this->redirect($urlOnError);
            }
            $emailChanged = ($user != null && $user->getEmailTmp() != null);
            $benutzerService = $this->get('benutzer_service'); /** @var $benutzerService BenutzerService */
            $benutzerService->confirm($user);

            $session = $request->getSession(); /** @var $session Session */
            if ($emailChanged) {
                // Ext informieren, dass die E-Mail Adresse geaendert wurde
                $session->getFlashBag()->add('emailChanged', 'true');
            } else {
                // Ext informieren, dass ein Passwort gesetzt werden muss
                $session->set('ext/setPassword', 'true');
            }

            // Benutzer einloggen, fuer Ext speichern und auf Start weiterleiten
            $authHandler = $this->get('auth_handler'); /** @var $authHandler AuthenticationHandler */
            return $authHandler->loginUser($request, $user);
        } catch (TokenExpiredException $e) {
            $this->get('session')->getFlashBag()->add('tokenExpired', 'true');
            return $this->redirect($urlOnError);
        } catch (TokenInvalidException $e) {
            $this->get('session')->getFlashBag()->add('tokenInvalid', 'true');
            return $this->redirect($urlOnError);
        }
    }

    /**
     * Holt Benutzerdaten des aktuellen Benutzers.
     *
     * @return Response
     * @Route(
     *      "/benutzer/get_own",
     *      options = { "expose" = true }
     * )
     */
    public function getOwnAction()
    {
        $response = array();

        $user = $this->getUser();
        $response['data'] = $user;

        return $this->jsonResponse($response);
    }

    /**
     * Sendet eine Confirm-Mail an die alte Mail-Adresse, um den Wechsel der Mailadresse zu bestaetigen.
     *
     * @param Request $request Request
     * @return Response
     * @Route(
     *      "/benutzer/set_tmp_email",
     *      options = { "expose" = true }
     * )
     */
    public function setTmpEmailAction(Request $request)
    {
        $response = array(
            'success' => false,
            'message' => $this->trans('user.email_change.mail_sent')
        );
        $emailTmp = $request->request->get('benutzer')['emailTmp'];
        $emailWdh = $request->request->get('benutzer')['emailWdh'];

        try {
            $benutzerService = $this->get('benutzer_service'); /** @var $benutzerService BenutzerService */
            $benutzerService->setTmpEmail($this->getUser(), $emailTmp, $emailWdh);
            $response['success'] = true;
        } catch (Exception $exception) {
            $response['message'] = $this->trans($exception->getMessage());
        }

        if (!empty($response['message']) && !$response['success']) {
            $response['errors'] = array();
            $response['errors']['benutzer[emailTmp]'] = $response['message'];
            $response['errors']['benutzer[emailWdh]'] = $response['message'];
        }

        return $this->jsonResponse($response);
    }

    /**
     * Aktualisiert die Daten eines Portalbenutzers.
     *
     * @param Request $request Request
     * @return Response
     * @Method("POST")
     * @Route(
     *      "/benutzer/update",
     *      options = { "expose" = true }
     * )
     */
    public function updateAction(Request $request)
    {
        $repo = $this->getDoctrine()->getManager()->getRepository('AppBundle:AccessControl\Benutzer'); /** @var $repo BenutzerRepository */
        $response = array(
            'success' => false
        );
        $id = $request->get('benutzer')['id'];

        try {
            $ben = $repo->findOrCreate($id, Benutzer::class);
            $ben->clearRolle();

            $formBen = $this->createForm(BenutzerType::class, $ben);
            $formBen->submit($request->get('benutzer'), false);

            if ($formBen->isValid()) {
                $benutzerService = $this->get('benutzer_service'); /** @var $benutzerService BenutzerService */
                $benutzerService->update($ben);
                $response['success'] = true;
                $response['benutzer'] = $ben;
            } else {
                $formErrors = SymfonyUtils::getErrorStringArray($formBen);
                $response['errors'] = $formErrors;
            }
        } catch (ExistsException $e) {
            $response['message'] = $this->trans($e->getMessage());
            $response['errors'] = array(
                'benutzer[email]' => $this->trans('user.email_change.error_exists')
            );
        } catch (Exception $e) {
            $response['message'] = $this->trans($e->getMessage());
        }

        return $this->jsonResponse($response);
    }

    /**
     * Loescht einen Benutzer.
     *
     * @param Request $request
     * @Route(
     *      "/benutzer/delete",
     *      options = { "expose" = true }
     * )
     * @Method("POST")
     * @return JsonResponse
     * @throws EntityNotFoundException
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    public function deleteAction(Request $request)
    {
        $repo = $this->getDoctrine()->getManager()->getRepository('AppBundle:AccessControl\Benutzer'); /** @var $repo BenutzerRepository */
        $response = array(
            'success' => false
        );

        $id = $request->request->get('id');
        $ben = $repo->findOrThrowNotFound($id);

        try {
            $benutzerService = $this->get('benutzer_service'); /** @var $benutzerService BenutzerService */
            $benutzerService->delete($ben);
            $response['success'] = true;
        } catch (UserSelfRemoveException $e) {
            $response['message'] = $this->trans($e->getMessage());
        } catch (AccessDeniedException $e) {
            throw $e;
        } catch (EntityNotFoundException $e) {
            throw $e;
        }

        return $this->jsonResponse($response);
    }
}
