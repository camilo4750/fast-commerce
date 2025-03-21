<?php

namespace App\Exceptions\Client;

use App\Exceptions\BusinessLogicException;

class ClientNotFoundException extends BusinessLogicException
{
    protected $message = 'Client not found';
    protected $code = 404;

    protected array $errors = [];
}
