<?php

namespace AppBundle\Exception;

/**
 * Exception, falls zu wenig Argumente/Parameter angegeben sind.
 *
 * @package AppBundle\Exception
 * @copyright 2016 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class TooFewArgumentsException extends \Exception
{
    const DEFAULT_MESSAGE = 'global.empty_fields_error';

    /**
     * NotModifiedException constructor.
     *
     * @param string $msg Message
     */
    public function __construct($msg = null)
    {
        parent::__construct((!empty($msg)) ? $msg : self::DEFAULT_MESSAGE);
    }
}
