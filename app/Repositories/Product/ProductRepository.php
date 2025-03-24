<?php

namespace App\Repositories\Product;

use App\Dto\Product\ProductUpdateStockDto;
use App\Entities\Product\ProductEntity;
use App\Interfaces\Repositories\Product\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function getById(int $productId)
    {
        return ProductEntity::find($productId);
    }

    public function updateStock(ProductUpdateStockDto $dto)
    {
        ProductEntity::query()
            ->where('id', '=', $dto->product_id)
            ->update([
                'stock' => $dto->quantity
            ]);

        return $this;
    }
}
