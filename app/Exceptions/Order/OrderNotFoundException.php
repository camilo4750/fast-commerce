<?php

namespace App\Exceptions\Order;

use App\Exceptions\BusinessLogicException;

class OrderNotFoundException extends BusinessLogicException
{
    protected $message = 'Orden no encontrada';
    protected $code = 404;
    protected array $errors = [];
}
