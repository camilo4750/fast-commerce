<?php

namespace App\Interfaces\Repositories\Product;

use App\Dto\Product\ProductUpdateStockDto;

interface ProductRepositoryInterface
{
    public function getById(int $productId);

    public function updateStock(ProductUpdateStockDto $dto);
}
