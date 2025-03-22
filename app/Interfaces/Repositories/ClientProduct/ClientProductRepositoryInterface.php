<?php

namespace App\Interfaces\Repositories\ClientProduct;

interface ClientProductRepositoryInterface
{
    public function getProductsByClient(int $clientId): object;
}
