<?php

namespace AppBundle\Listener;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation\Tag;
use JMS\DiExtraBundle\Annotation\Observe;

/**
 * Listener fuer Ajax Authentication Exception Events. Dient der Behandlung von Authentication Exceptions bei XML HTTP Requests.
 * Liste aller Exceptions, die geworfen und hier behandelt werden koenn(t)en:
 *
 * http://api.symfony.com/2.6/Symfony/Component/Security/Core/Exception.html
 *
 * @Service("ajax_authentication_listener")
 */
class AjaxAuthenticationListener
{
    /**
     * Wird bei einer CoreException aufgerufen.
     *
     * @param GetResponseForExceptionEvent $event Event
     * @Observe("kernel.exception", priority = 1000)
     */
    public function onCoreException(GetResponseForExceptionEvent $event)
    {
        $exception = $event->getException();
        $request = $event->getRequest();
        if ($request->isXmlHttpRequest()) {
            if ($exception instanceof AuthenticationException || $exception instanceof AccessDeniedException || $exception instanceof AuthenticationCredentialsNotFoundException) {
                // AuthenticationCredentialsNotFoundException tritt bei einer abgelaufenen Session auf
                if ($exception instanceof AuthenticationCredentialsNotFoundException) {
                    // HTTP StatusCode "403 Forbidden" zurueckgeben
                    $statusCode = 403;
                } else {
                    // HTTP StatusCode "401 Unauthorized" zurueckgeben
                    $statusCode = 401;
                }
                $content = array(
                    'success' => false,
                    'errors' => array(
                        'statusCode' => $statusCode
                    )
                );
                $response = new JsonResponse($content, $statusCode);
                $event->setResponse($response);
            }
        }
    }
}
