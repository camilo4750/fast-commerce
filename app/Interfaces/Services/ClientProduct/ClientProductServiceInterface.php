<?php

namespace App\Interfaces\Services\ClientProduct;

interface ClientProductServiceInterface
{
    public function getProductsByClient(int $clientId): array;
}