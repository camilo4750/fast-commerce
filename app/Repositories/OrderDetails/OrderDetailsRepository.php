<?php

namespace App\Repositories\OrderDetails;

use App\Dto\OrderDetails\OrderDetailsDto;
use App\Entities\OrderDetails\OrderDetailsEntity;
use App\Interfaces\Repositories\OrderDetails\OrderDetailsRepositoryInterface;
use Illuminate\Support\Facades\DB;

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

    public function getProductsByOrder(int $orderId): object|null
    {
        $order_details = OrderDetailsEntity::query()->select([
            'order_details.id',
            'products.name',
            'order_details.quantity',
            'products.price',
             DB::raw('(order_details.quantity * products.price) AS price_total'),
        ])
            ->leftJoin('products', 'order_details.product_id', '=', 'products.id')
            ->where('order_details.order_id', '=', $orderId)
            ->orderBy('order_details.id')
            ->get();

        return (!$order_details->isEmpty()) ?  $order_details : null;
    }
}
