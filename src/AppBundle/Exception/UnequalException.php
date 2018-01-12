<?php

namespace AppBundle\Exception;

/**
 * Exception, falls etwas ungleich ist.
 *
 * @package AppBundle\Exception
 * @copyright 2016 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class UnequalException extends \Exception
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
