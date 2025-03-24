<?php

namespace App\Repositories\ClientProduct;

use App\Entities\ClientProduct\ClientProductEntity;
use App\Interfaces\Repositories\ClientProduct\ClientProductRepositoryInterface;

class ClientProductRepository implements ClientProductRepositoryInterface
{
    public function getProductsByClient(int $clientId): object|null
    {
        $products = ClientProductEntity::query()->select([
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
            ->orderBy('products.name')
            ->get();
            
        return (!$products->isEmpty()) ?  $products : null;
    }
}
