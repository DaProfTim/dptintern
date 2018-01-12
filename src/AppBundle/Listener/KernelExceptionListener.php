<?php

namespace AppBundle\Listener;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Templating\EngineInterface;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\Observe;

/**
 * Listener fuer Kernel Exception Events. Dient der manuellen Behandlung von Exceptions fuer XML HTTP Request Exceptions.
 *
 * @Service("kernel_exception_listener", autowire=true)
 */
class KernelExceptionListener
{
    protected $router;
    protected $logger;
    protected $kernel;
    protected $tpl;

    /**
     * KernelExceptionListener constructor.
     *
     * @param RouterInterface $router Router
     * @param KernelInterface $kernel Kernel
     * @param LoggerInterface $logger Logger
     * @param EngineInterface $tpl Template Engine
     *
     * @InjectParams({
     *     "kernel" = @Inject("kernel"),
     *     "tpl" = @Inject("templating")
     * })
     */
    public function __construct(RouterInterface $router, KernelInterface $kernel, LoggerInterface $logger, EngineInterface $tpl)
    {
        $this->router = $router;
        $this->logger = $logger;
        $this->kernel = $kernel;
        $this->tpl = $tpl;
    }

    /**
     * Wird beim Auftreten einer KernelException aufgerufen.
     *
     * @param GetResponseForExceptionEvent $event Event
     * @Observe("kernel.exception")
     */
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $request = $event->getRequest();

        if (!$event->isMasterRequest()) {
            return;
        }

        if ($request->isXmlHttpRequest()) {
            $this->onXmlHttpRequestException($event);
        }
    }

    /**
     * Behandelt Exceptions fuer Xml Http Requests. Gibt eine JSON Response z.B. fuer ExtJS zurueck.
     *
     * @param GetResponseForExceptionEvent $event Event
     */
    private function onXmlHttpRequestException(GetResponseForExceptionEvent $event)
    {
        $exception = $event->getException();
        $request = $event->getRequest();
        $logMsg = $this->buildLoggerMessage($exception, $request);

        $this->logger->error($logMsg);

        if ($exception instanceof HttpException) {
            $statusCode = $exception->getStatusCode();
        } elseif ($exception->getCode() !== 0) {
            $statusCode = $exception->getCode();
        } else {
            // falls in der geworfenen Exception kein StatusCode gesetzt worden ist, als Standard 500 zurueckgeben
            $statusCode = 500;
        }
        $content = array(
            'success' => false,
            'errors' => array(
                'statusCode' => $statusCode
            )
        );
        // Zusaetzliche Informationen in JSON Response schreiben wenn im dev Environment
        if ($this->kernel->getEnvironment() == 'dev') {
            $content['debugExceptionInfo'] = $logMsg;
        }
        $response = new JsonResponse($content);
        $event->setResponse($response);
    }

    /**
     * Setzt eine LogMessage aus dem uebergebenen Request und Exception zusammen.
     *
     * @param \Exception $exception Exception
     * @param Request $request Request
     * @return string LogMesasge
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    private function buildLoggerMessage(\Exception $exception, Request $request)
    {
        $logMsg = (($request->isXmlHttpRequest()) ? 'XML ' : '') . 'HTTP Request Exception vom Typ ' . get_class($exception) . ' @ RequestURI: '
            . $request->getRequestUri() . ' mit ExceptionMessage: ' . $exception->getMessage() . ', File: '
            . $exception->getFile() . ', Line: ' . $exception->getLine();

        return $logMsg;
    }
}
