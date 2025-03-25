<?php

namespace App\Repositories\Order;

use App\Dto\Order\OrderDto;
use App\Entities\Order\OrderEntity;
use App\Interfaces\Repositories\Order\OrderRepositoryInterface;
use Illuminate\Support\Collection;

class OrderRepository implements OrderRepositoryInterface
{
    public function store(OrderDto $dto): int
    {
        $order_id = OrderEntity::query()->insertGetId([
            'client_id' => $dto->client_id,
            'created_at' => 'now()'
        ]);

        return $order_id;
    }

    public function getOrdersByClient(int $client_id): Object
    {
        return OrderEntity::query()->select([
            "orders.id",
            "orders.created_at"
        ])
            ->where('client_id', '=', $client_id)
            ->orderBy('id')
            ->get();
    }
}
