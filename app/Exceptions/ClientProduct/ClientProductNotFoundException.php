<?php

namespace App\Exceptions\ClientProduct;

use App\Exceptions\BusinessLogicException;

class ClientProductNotFoundException extends BusinessLogicException
{
    protected $message = 'Productos no encontrados';
    protected $code = 404;

    protected array $errors = [];
}