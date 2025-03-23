<?php

namespace App\Exceptions\Product;

use App\Exceptions\BusinessLogicException;

class ProductNotFoundException extends BusinessLogicException
{
    protected $message = 'Producto no encontrado';
    protected $code = 404;

    protected array $errors = [];
}
