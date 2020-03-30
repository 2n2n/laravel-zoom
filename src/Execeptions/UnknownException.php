<?php

namespace MacsiDigital\Zoom\Exceptions;

class UnkownException extends \Exception
{
    public function __construct($message = '', $previous = null)
    {
        parent::__construct("Undocumented Error: {$message}", 500, $previous);
    }
}
