<?php

namespace AppBundle\Utils;

use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Erzeugt einen Response mit Hilfe der serialize-Methode des JMS-Serializer-Bundle.
 *
 * @copyright 2014 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class JsonResponse extends Response
{
    public function __construct(SerializerInterface $jmsSerializer, $data = null, $status = 200, $headers = array(), $context = null)
    {
        parent::__construct(($data !== null) ? $jmsSerializer->serialize($data, 'json', $context) : '', $status, $headers);
    }
}
