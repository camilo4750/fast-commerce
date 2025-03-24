<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Wrappers\ControllerWrapper;
use App\Interfaces\Services\Product\ProductServiceInterface;

class ProductController extends Controller
{
    private ProductServiceInterface $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }


    public function getById(int $productId)
    {
        return ControllerWrapper::execWithJsonSuccessResponse(function () use ($productId) {
            $product = $this->productService->getById($productId);
            return [
                "message" => "Informacion del producto",
                "data" => $product,
            ];
        });
    }
}
