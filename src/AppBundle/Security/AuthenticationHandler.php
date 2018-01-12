<?php

namespace AppBundle\Security;

use AppBundle\Entity\AccessControl\Benutzer;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;
use Symfony\Component\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManager;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;

/**
 * AuthentifizierungsHandler.
 *
 * @copyright 2014 NPO Applications GmbH
 * @author aufbauend auf AuthenticationHandler Klasse von Joe Sexton <joe@webtipblog.com>
 *
 * @Service("auth_handler", autowire=true)
 */
class AuthenticationHandler implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface
{
    protected $router;
    protected $session;
    protected $security;
    protected $authChecker;
    protected $translator;
    protected $jmsSerializer;
    protected $em;
    protected $eventDispatcher;

    /**
     * AuthenticationHandler constructor.
     * @param RouterInterface $router
     * @param SessionInterface $session
     * @param TokenStorageInterface $security
     * @param AuthorizationCheckerInterface $authChecker
     * @param TranslatorInterface $translator
     * @param SerializerInterface $jmsSerializer
     * @param EntityManager $em
     * @param EventDispatcherInterface $eventDispatcher
     *
     * @InjectParams({
     *     "security" = @Inject("security.token_storage"),
     *     "authChecker" = @Inject("security.authorization_checker"),
     *     "jmsSerializer" = @Inject("jms_serializer"),
     *     "em" = @Inject("doctrine.orm.entity_manager")
     * })
     */
    public function __construct(
        RouterInterface $router,
        SessionInterface $session,
        TokenStorageInterface $security,
        AuthorizationCheckerInterface $authChecker,
        TranslatorInterface $translator,
        SerializerInterface $jmsSerializer,
        EntityManager $em,
        EventDispatcherInterface $eventDispatcher
    ) {
        $this->router  = $router;
        $this->session = $session;
        $this->security = $security;
        $this->authChecker = $authChecker;
        $this->translator = $translator;
        $this->jmsSerializer = $jmsSerializer;
        $this->em = $em;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * Loggt einen Benutzer manuell ein.
     *
     * @param Request $request
     * @param Benutzer $user
     * @return \AppBundle\Utils\JsonResponse|RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function loginUser(Request $request, Benutzer $user)
    {
        $token = new UsernamePasswordToken($user, $user->getPassword(), 'default', $user->getRoles());
        return $this->onAuthenticationSuccess($request, $token);
    }
    
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        $token = new UsernamePasswordToken($token->getUser(), $token->getCredentials(), 'default', $token->getRoles());
        $this->security->setToken($token);
        $this->session->set('_security_default', serialize($token));
        
        $groups = array('Default');
        $context = new SerializationContext();
        $context->setGroups($groups);
        $jsonToken = $this->jmsSerializer->serialize($token->getUser(), 'json');

        // Benutzer fuer ExtJS speichern
        $request->getSession()->set('ext/user', $jsonToken);

        // Login-Event dispatchen
        $event = new InteractiveLoginEvent($request, $token);
        $this->eventDispatcher->dispatch(SecurityEvents::INTERACTIVE_LOGIN, $event);

        // Ajax login
        if ($request->isXmlHttpRequest()) {
            $response = array(
                'success' => true,
                'msg' => $this->translator->trans('login.success'),
                'token' => $token->getUser()
            );
            return new \AppBundle\Utils\JsonResponse($this->jmsSerializer, $response, 200, array(), $context);

        // redirect on form login
        } else {
            // Im Dev darf bei Verwendung einer Ext-Route kein Slash zwischen app_dev.php und der Raute stehen, da sonst die Pfade fuer Ext nicht passen
            $url = str_replace('app_dev.php/#', 'app_dev.php#', $this->router->generate('index') . '#benutzer/index');
            return new RedirectResponse($url);
        }
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        // Ajax login
        if ($request->isXmlHttpRequest()) {
            $response = array(
                'success' => false,
                'msg' => $exception->getMessage()
            );
            return new JsonResponse($response);

        // Form login
        } else {
            // Auth exception in Session schreiben
            $request->getSession()->set(Security::AUTHENTICATION_ERROR, $exception);
            
            return new RedirectResponse($this->router->generate('index'));
        }
    }

    /**
     * Liest einen eingeloggten User aus der Session aus und authentifiziert diesen erneut.
     * Notwendig, um nicht auf neue Seite nach Authentifizierung weiterleiten zu muessen.
     *
     * @param Request $request Request
     */
    public function reauthenticateUserFromSession(Request $request)
    {
        $token = unserialize($this->session->get('_security_default'));
        $repository = $this->em->getRepository('AppBundle:AccessControl\Benutzer');
        $freshUser = $repository->find($token->getUser()->getId());
        /** @var $freshUser UserInterface */
        $freshToken = new UsernamePasswordToken($freshUser, $freshUser->getPassword(), 'default', $freshUser->getRoles());
        $this->security->setToken($freshToken);

        // Login-Event dispatchen
        $event = new InteractiveLoginEvent($request, $freshToken);
        $this->eventDispatcher->dispatch(SecurityEvents::INTERACTIVE_LOGIN, $event);
    }
}
