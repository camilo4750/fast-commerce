<?php

namespace App\Interfaces\Services\OrderDetails;

interface OrderDetailsServiceInterface
{
    public function getProductsByOrder(int $orderId);
}