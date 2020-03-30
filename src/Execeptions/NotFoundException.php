<?php

namespace MacsiDigital\Zoom\Exceptions;

// Response code 400

class NotFoundException extends \Exception
{
    public function __construct($message = '', $error_code, $previous = null)
    {
        parent::__construct("Error Code {$error_code}: {$message}", 404, $previous);
    }
}
