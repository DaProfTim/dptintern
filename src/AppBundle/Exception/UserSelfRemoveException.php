<?php

namespace AppBundle\Exception;

/**
 * Exception, falls ein Benutzer versucht, sich selbst zu loeschen.
 *
 * @package AppBundle\Exception
 * @copyright 2015 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class UserSelfRemoveException extends \Exception
{
    const DEFAULT_MESSAGE = 'user.self_remove_error';

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
