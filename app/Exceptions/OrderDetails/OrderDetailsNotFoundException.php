<?php

namespace App\Exceptions\OrderDetails;

use App\Exceptions\BusinessLogicException;

class OrderDetailsNotFoundException extends BusinessLogicException
{
    protected $message = 'Detalles de la orden no encontrados';
    protected $code = 404;
    protected array $errors = [];
}