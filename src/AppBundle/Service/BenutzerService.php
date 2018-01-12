<?php

namespace AppBundle\Service;

use AppBundle\Entity\AccessControl\Benutzer;
use AppBundle\Exception\NotModifiedException;
use AppBundle\Exception\PasswordPolicyViolationException;
use AppBundle\Exception\TooFewArgumentsException;
use AppBundle\Exception\UnequalException;
use AppBundle\Exception\ExistsException;
use AppBundle\Exception\UserSelfRemoveException;
use AppBundle\Exception\TokenExpiredException;
use AppBundle\Exception\TokenInvalidException;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use AppBundle\Utils\SecurityUtils;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Templating\EngineInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Exception\ValidatorException;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;

/**
 * Service rund um Benutzer.
 *
 * @package AppBundle\Service
 * @copyright 2016 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 *
 * @Service("benutzer_service")
 */
class BenutzerService
{
    protected $em;
    protected $mailer;
    protected $logger;
    protected $router;
    protected $trans;
    protected $tpl;
    protected $authChecker;
    protected $tokenStorage;

    /**
     * @InjectParams({
     *     "em" = @Inject("doctrine.orm.entity_manager"),
     *     "trans" = @Inject("translator"),
     *     "tpl" = @Inject("templating"),
     *     "authChecker" = @Inject("security.authorization_checker"),
     *     "tokenStorage" = @Inject("security.token_storage")
     * })
     */
    public function __construct(
        EntityManagerInterface $em,
        \Swift_Mailer $mailer,
        LoggerInterface $logger,
        RouterInterface $router,
        TranslatorInterface $trans,
        EngineInterface $tpl,
        AuthorizationCheckerInterface $authChecker,
        TokenStorageInterface $tokenStorage
    ) {
        $this->em = $em;
        $this->mailer = $mailer;
        $this->logger = $logger;
        $this->router = $router;
        $this->trans = $trans;
        $this->tpl = $tpl;
        $this->authChecker = $authChecker;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * Sendet eine Confirm-Mail an die neue Mail-Adresse, um den Wechsel der Mailadresse zu bestaetigen.
     *
     * @param Benutzer $user Benutzer
     * @param string $email E-Mail
     * @param string $email2 E-Mail Wiederholung
     * @throws
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    public function setTmpEmail(Benutzer $user = null, $email = null, $email2 = null)
    {
        if (empty($user)) {
            throw new EntityNotFoundException(Benutzer::class);
        }
        if (empty($this->tokenStorage->getToken()) || empty($this->tokenStorage->getToken()->getUser())) {
            throw new AccessDeniedException('global.xhr_access_denied_info');
        }
        $authUser = $this->tokenStorage->getToken()->getUser(); /** @var $user Benutzer */
        if (!$user instanceof Benutzer || ($user->getId() != $authUser->getId() && !$this->authChecker->isGranted('ROLE_FACHADMIN'))) {
            throw new AccessDeniedException('global.xhr_access_denied_info');
        }
        if (empty($email) || empty($email2)) {
            throw new TooFewArgumentsException('user.email_change.error_empty');
        }
        if ($email != $email2) {
            throw new UnequalException('user.email_change.error_not_equal');
        }
        if ($email == $user->getEmail()) {
            throw new NotModifiedException('user.email_change.error_not_modified');
        }
        if ($this->em->getRepository('AppBundle:AccessControl\Benutzer')->isUniqueEmail($user)) {
            throw new ExistsException('user.email_change.error_exists');
        }
        $user->setEmailTmp($email);
        $user->setResetToken(SecurityUtils::getResetToken());
        $mailTemplate = 'email/email_change.txt.twig';
        $resetConfirmLink = $this->router->generate('app_benutzer_confirm', array('token' => $user->getResetToken()), UrlGeneratorInterface::ABSOLUTE_URL);
        $message = \Swift_Message::newInstance()
            ->setSubject($this->trans->trans('user.email_change_mail.subject'))
            ->setFrom($this->trans->trans('mails.from'))
            ->setTo($email)
            ->setBody(
                $this->tpl->render(
                    $mailTemplate,
                    array(
                        'email_change_confirm_link' => $resetConfirmLink
                    )
                )
            ); /** @var \Swift_Message $message */

        $this->em->persist($user);
        $this->em->flush();
        $this->mailer->send($message);
    }

    /**
     * Bestaetigt eine der folgenden Anforderungen ueber den gueltigen ResetToken:
     *  - Passwort-Zuruecksetz-Anforderung
     *  - Registrierung eines Benutzers
     *  - Aenderung der E-Mail Adresse
     *
     * @param Benutzer $user Benutzer
     * @throws TokenExpiredException|TokenInvalidException
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    public function confirm(Benutzer $user = null)
    {
        if (empty($user)) {
            throw new TokenInvalidException;
        }
        // Token darf nicht aelter sein als Benutzer::RESET_TOKEN_LIFETIME
        if ($user->isResetTokenExpired()) {
            throw new TokenExpiredException;
        }

        // E-Mail Aenderungsanforderung
        if (!empty($user->getEmailTmp())) {
            $user->setEmail($user->getEmailTmp());
            $user->setEmailTmp(null);
        }
        // Erster Login?
        if (empty($user->getErsterLogin())) {
            $user->setErsterLogin(new \DateTime());
        }
        // Loesche ResetToken aus DB
        $user->setResetToken(null);
        $this->em->persist($user);
        $this->em->flush();
    }

    /**
     * Setzt einen ResetToken bei dem Benutzer, dem die uebergebene E-Mail Adresse gehoert und sendet ihm diesen per E-Mail zu.
     *
     * @param string $email E-Mail Adresse des Benutzerse
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     * @throws EntityNotFoundException|TooFewArgumentsException
     */
    public function setAndSendResetToken($email)
    {
        if (empty($email)) {
            throw new TooFewArgumentsException('login.error.email_empty');
        }

        $user = $this->em->getRepository('AppBundle:AccessControl\Benutzer')->findOneBy(array('benutzername' => $email));
        if (empty($user)) {
            throw new EntityNotFoundException(Benutzer::class, 'login.error.email_invalid');
        }
        $user->setResetToken(SecurityUtils::getResetToken());
        $mailTemplate = 'email/password_reset.txt.twig';
        $resetConfirmLink = $this->router->generate('app_benutzer_confirm', array('token' => $user->getResetToken()), UrlGeneratorInterface::ABSOLUTE_URL);
        $resetLink = str_replace('/#', '#', $this->router->generate('index', array(), UrlGeneratorInterface::ABSOLUTE_URL) . '#passwort-vergessen');
        $message = \Swift_Message::newInstance()
            ->setSubject($this->trans->trans('login.password_reset_mail.subject'))
            ->setFrom($this->trans->trans('mails.from'))
            ->setTo($user->getBenutzername())
            ->setBody(
                $this->tpl->render(
                    $mailTemplate,
                    array(
                        'password_reset_confirm_link' => $resetConfirmLink,
                        'password_reset_link' => $resetLink
                    )
                )
            ); /** @var \Swift_Message $message */

        $this->em->persist($user);
        $this->em->flush();
        $this->mailer->send($message);
    }

    /**
     * Aktualisiert Benutzerdaten.
     *
     * @param Benutzer $ben zu aktualisierender Benutzer
     * @throws AccessDeniedException
     * @throws ExistsException|EntityNotFoundException
     */
    public function update(Benutzer $ben = null)
    {
        if (empty($ben)) {
            throw new EntityNotFoundException(Benutzer::class);
        }
        if (empty($this->tokenStorage->getToken()) || empty($this->tokenStorage->getToken()->getUser()) || !$this->authChecker->isGranted('ROLE_FACHADMIN')) {
            throw new AccessDeniedException('global.xhr_access_denied_info');
        }
        // Pruefe, ob Benutzer E-Mail unique ist
        if ($this->em->getRepository('AppBundle:AccessControl\Benutzer')->isUniqueEmail($ben)) {
            throw new ExistsException('user.email_change.error_exists');
        }

        $this->em->persist($ben);
        $this->em->flush();
    }

    /**
     * Loescht den uebergebenen Benutzer.
     *
     * @param Benutzer $ben zu loeschenden Benutzer
     * @throws AccessDeniedException|UserSelfRemoveException|EntityNotFoundException
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    public function delete(Benutzer $ben = null)
    {
        if (empty($user)) {
            throw new EntityNotFoundException(Benutzer::class);
        }
        if (empty($this->tokenStorage->getToken()) || empty($this->tokenStorage->getToken()->getUser()) || !$this->authChecker->isGranted('ROLE_FACHADMIN')) {
            throw new AccessDeniedException('global.xhr_access_denied_info');
        }
        // Benutzer darf sich nicht selbst loeschen
        if ($this->tokenStorage->getToken()->getUser()->getId() == $ben->getId()) {
            throw new UserSelfRemoveException();
        }
        
        $this->em->remove($ben);
        $this->em->flush();
    }

    /**
     * Setzt das Passwort fuer den uebergebenen Benutzer neu.
     *
     * @param Benutzer $user Benutzer
     * @param string $passwordNew neues Passwort
     * @param string $passwordNew2 neues Passwort Wiederholung
     * @param string $password aktuelles Passwort
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     * @throws AccessDeniedException|TooFewArgumentsException|BadCredentialsException|UnequalException|PasswordPolicyViolationException|EntityNotFoundException
     */
    public function setPassword(Benutzer $user = null, $passwordNew = null, $passwordNew2 = null, $password = null)
    {
        if (empty($user)) {
            throw new EntityNotFoundException(Benutzer::class);
        }
        if (empty($this->tokenStorage->getToken()) || empty($this->tokenStorage->getToken()->getUser())) {
            throw new AccessDeniedException('user.password_invalid');
        }
        if (empty($passwordNew) || empty($passwordNew2)) {
            throw new TooFewArgumentsException();
        }
        if ($password != null && !SecurityUtils::verifyPassword($password, $user->getPasswort())) {
            throw new BadCredentialsException('user.password_invalid');
        }
        if ($passwordNew != $passwordNew2) {
            throw new UnequalException('user.password_unequal');
        }
        if (!SecurityUtils::checkPasswordPolicy($passwordNew)) {
            throw new PasswordPolicyViolationException();
        }
        $user->setPasswort(SecurityUtils::hashPassword($passwordNew));
        $user->setResetToken(null);
        $this->em->persist($user);
        $this->em->flush();
    }
}
