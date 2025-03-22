<?php

namespace App\Repositories\ClientProduct;

use App\Entities\ClientProduct\ClientProductEntity;
use App\Interfaces\Repositories\ClientProduct\ClientProductRepositoryInterface;

class ClientProductRepository implements ClientProductRepositoryInterface
{
    public function getProductsByClient(int $clientId): object
    {
        return ClientProductEntity::query()->select([
            "products.id",
            "products.name",
            "products.description",
            "products.price",
            "products.stock",
            "products.created_at",
            "products.updated_at",
        ])
            ->Leftjoin('products', 'client_product.product_id', '=', 'products.id')
            ->where('client_product.client_id', $clientId)
            ->get();
    }
}
