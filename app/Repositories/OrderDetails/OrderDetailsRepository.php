<?php

namespace App\Repositories\OrderDetails;

use App\Dto\OrderDetails\OrderDetailsDto;
use App\Entities\OrderDetails\OrderDetailsEntity;
use App\Interfaces\Repositories\OrderDetails\OrderDetailsRepositoryInterface;

class OrderDetailsRepository implements OrderDetailsRepositoryInterface
{
    public function store(OrderDetailsDto $dto)
    {
        OrderDetailsEntity::query()->insert([
            'order_id' => $dto->order_id,
            'product_id' => $dto->product_id,
            'quantity' => $dto->quantity,
            'created_at' => 'now()',
        ]);

        return $this;
    }
}
