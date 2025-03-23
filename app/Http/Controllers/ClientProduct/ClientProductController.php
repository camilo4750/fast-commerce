<?php

namespace App\Http\Controllers\ClientProduct;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Wrappers\ControllerWrapper;
use App\Interfaces\Services\ClientProduct\ClientProductServiceInterface;

class ClientProductController extends Controller
{
    protected $clientProductService;

    public function __construct(ClientProductServiceInterface $clientProductService)
    {
        $this->clientProductService = $clientProductService;
    }

    public function getProductsByClient(int $clientId)
    {
        return ControllerWrapper::execWithJsonSuccessResponse(function () use ($clientId) {
            $products = $this->clientProductService->getProductsByClient($clientId);
            return [
                "message" => "Productos encontrados",
                "data" => $products,
            ];
        });
    }
}
