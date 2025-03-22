<?php

namespace App\Services\ClientProduct;

use App\Exceptions\ClientProduct\ClientProductNotFoundException;
use App\Interfaces\Repositories\ClientProduct\ClientProductRepositoryInterface;
use App\Interfaces\Services\ClientProduct\ClientProductServiceInterface;
use App\Mappers\Product\ProductViewDtoMapper;

class ClientProductService implements ClientProductServiceInterface
{
    protected $clientProductRepository;

    public function __construct(ClientProductRepositoryInterface $clientProductRepository)
    {
        $this->clientProductRepository = $clientProductRepository;
    }
    public function getProductsByClient(int $clientId): array
    {
        $products = $this->clientProductRepository->getProductsByClient($clientId);

        throw_if(
            !$products,
            new ClientProductNotFoundException()
        );
        
        return (new ProductViewDtoMapper)->createCollectionFromDbRecords($products);
    }
}
