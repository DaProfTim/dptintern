<?php

namespace AppBundle\Exception;

/**
 * Exception, falls etwas entgegen der Erwartung nicht veraendert wurde.
 *
 * @package AppBundle\Exception
 * @copyright 2016 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class NotModifiedException extends \Exception
{
    const DEFAULT_MESSAGE = '';

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
