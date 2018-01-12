<?php

namespace AppBundle\Exception;

/**
 * Exception, falls ein Token abgelaufen ist.
 *
 * @package AppBundle\Exception
 * @copyright 2015 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class TokenInvalidException extends \Exception
{
    const DEFAULT_MESSAGE = 'user.reset_token.invalid';

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
