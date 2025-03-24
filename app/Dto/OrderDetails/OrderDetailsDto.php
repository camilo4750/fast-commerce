<?php

namespace App\Dto\OrderDetails;

use App\Dto\BaseDto;

class OrderDetailsDto extends BaseDto
{
    public int $order_id;
    public int $product_id;
    public int $quantity;
}