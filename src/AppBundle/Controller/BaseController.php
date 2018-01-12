<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AccessControl\Benutzer;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Utils\JsonResponse;
use Symfony\Component\Form\Form;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;

/**
 * Abstrakte Oberklasse fuer alle Controller.
 *
 * @package AppBundle\Controller
 * @copyright 2016 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
abstract class BaseController extends Controller
{
    /**
     * Komfort-Methode, um Text auszugeben. Texte liegen im Ordner app/Resources/translations.
     *
     * @param string $arg Argument
     * @param array $params Parameter
     * @return string Text
     */
    protected function trans($arg, $params = array())
    {
        return $this->get('translator')->trans($arg, $params);
    }

    /**
     * Komfort-Methode, um JSON-Responses zurueckzugeben. Benutzt die Default-Gruppe, wenn keine Gruppen angegeben sind.
     *
     * @param array $data in JSON zu packende Daten
     * @param array $groups string-Array mit den zu benutzenden Gruppen; Standard, wenn nicht angegeben: Default-Gruppe
     * @return \AppBundle\Utils\JsonResponse
     */
    protected function jsonResponse($data, $groups = null)
    {
        if ($groups == null) {
            $groups = array('Default');
        }
        $context = new SerializationContext();
        $context->setGroups($groups);
        $context->enableMaxDepthChecks();
        $serializer = $this->get('jms_serializer');
        /** @var $serializer SerializerInterface */
        return new JsonResponse($serializer, $data, 200, array(), $context);
    }

    /**
     * Liefert den aktuell eingeloggten Benutzer. Ueberschreibt die getUser aus dem Symfony-Framework-Bundle, um korrekte Docs/Type-Hints anzuzeigen beim Aufruf.
     *
     * @return Benutzer|null
     * @throws \LogicException If SecurityBundle is not available
     * @see \Symfony\Component\Security\Core\Authentication\Token\TokenInterface::getUser()
     */
    protected function getUser()
    {
        return parent::getUser();
    }

    /**
     * Checks if the attributes are granted against the current authentication token and optionally supplied object.
     *
     * @param mixed $attributes
     * @param null $object
     * @return bool
     */
    protected function isGranted($attributes, $object = null)
    {
        $authChecker = $this->get('security.authorization_checker'); /** @var $authChecker AuthorizationCheckerInterface */
        return $authChecker->isGranted($attributes);
    }

    /**
     * Komfort Methode, um manuell zu pruefen, ob ein CSRF Token gueltig ist.
     *
     * @param string $token zu pruefendes Token
     * @return bool true, wenn valid
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    protected function isCsrfValid($token)
    {
        return $this->get('security.csrf.token_manager')->isTokenValid(new CsrfToken($this->container->getParameter('csrf_token_id'), $token));
    }

    /**
     * Ueberschreibt den options-Default. Creates and returns a Form instance from the type of the form.
     *
     * @param string$type The fully qualified class name of the form type
     * @param mixed $data The initial data for the form
     * @param array $options Options for the form
     * @return Form
     */
    protected function createForm($type, $data = null, array $options = array())
    {
        if (empty($options)) {
            $options = array(
                'method' => 'POST',
                'csrf_token_id' => $this->container->getParameter('csrf_token_id')
            );
        }
        return $this->container->get('form.factory')->create($type, $data, $options);
    }
}
