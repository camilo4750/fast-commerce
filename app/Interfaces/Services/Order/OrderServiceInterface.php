<?php

namespace App\Interfaces\Services\Order;

use App\Dto\Order\OrderDto;
use Illuminate\Http\Request;

interface OrderServiceInterface 
{
    public function storeOrder(Request $request): int;
}