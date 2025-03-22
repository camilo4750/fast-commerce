<?php 

namespace App\Interfaces\Services\Product;

interface ProductServiceInterface
{
    public function getById(int $productId);
}