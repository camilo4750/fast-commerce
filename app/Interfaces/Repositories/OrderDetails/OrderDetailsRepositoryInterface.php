<?php

namespace App\Interfaces\Repositories\OrderDetails;

use App\Dto\OrderDetails\OrderDetailsDto;

interface OrderDetailsRepositoryInterface
{
    public function store(OrderDetailsDto $dto);

    public function getProductsByOrder(int $orderId): object|null;
}
