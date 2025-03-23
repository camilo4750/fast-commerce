<?php

namespace App\Interfaces\Repositories\Product;

interface ProductRepositoryInterface
{
    public function getById(int $productId);
}   