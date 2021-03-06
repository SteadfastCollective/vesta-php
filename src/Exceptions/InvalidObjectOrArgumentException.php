<?php

namespace SteadfastCollective\Vesta\Exceptions;

use Exception;

class InvalidObjectOrArgumentException extends Exception
{
    public function __construct($message = null)
    {
        parent::__construct($message, 2);
    }
}
