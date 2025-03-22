<?php

namespace App\Services\Product;

use App\Exceptions\Product\ProductNotFoundException;
use App\Interfaces\Repositories\Product\ProductRepositoryInterface;
use App\Interfaces\Services\Product\ProductServiceInterface;
use App\Mappers\Product\ProductViewDtoMapper;

class ProductService implements ProductServiceInterface
{
    private array $errors = [];
    protected ProductRepositoryInterface $ProductRepo;

    public function __construct()
    {
        $this->ProductRepo = app(ProductRepositoryInterface::class);
    }

    public function getById(int $productId)
    {
        $product = $this->ProductRepo->getById($productId);

        throw_if(
            !$product,
            new ProductNotFoundException()
        );

        return (new ProductViewDtoMapper)->createFromDbRecords($product);
    }
}
