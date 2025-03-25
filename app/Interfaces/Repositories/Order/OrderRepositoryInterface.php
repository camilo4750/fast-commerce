<?php

namespace App\Interfaces\Repositories\Order;

use App\Dto\Order\OrderDto;

interface OrderRepositoryInterface
{
    public function store(OrderDto $dto): int;

    public function getOrdersByClient(int $client_id): Object;
}
