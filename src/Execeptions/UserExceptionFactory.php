<?php

namespace MacsiDigital\Zoom\Exceptions;

class UserExceptionFactory
{
    public static function generate($response)
    {
        $body = $response->getBody();
        $message = $body['message'];
        $error_code = $body['code'];
        $status_code = $response->getStatusCode();

        if ($status_code == 400) {
            throw new BadRequestException($message, $error_code);
        } elseif ($response->getStatusCode() == 404) {
            throw new NotFoundException($message, $error_code);
        } elseif ($response->getStatusCode() == 409) {
            throw new AlreadyExistsException($message, $error_code);
        } else {
            throw new UnkownException();
        }
    }
}
