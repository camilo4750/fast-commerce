<?php

namespace App\Repositories\Product;

use App\Entities\Product\ProductEntity;
use App\Interfaces\Repositories\Product\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function getById(int $productId)
    {
        return ProductEntity::find($productId);
    }
}