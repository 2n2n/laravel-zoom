<?php

namespace MacsiDigital\Zoom\Exceptions;

// Response code 409

class AlreadyExistsException extends \Exception
{
    public function __construct($message = '', $error_code, $previous = null)
    {
        parent::__construct($message, $error_code, $previous);
    }
}
