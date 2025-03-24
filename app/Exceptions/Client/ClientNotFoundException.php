<?php

namespace App\Exceptions\Client;

use App\Exceptions\BusinessLogicException;

class ClientNotFoundException extends BusinessLogicException
{
    protected $message = 'Cliente no encontrado';
    protected $code = 404;

    protected array $errors = [];
}
