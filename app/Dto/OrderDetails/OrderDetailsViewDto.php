<?php

namespace App\Dto\OrderDetails;

use App\Dto\BaseDto;

class OrderDetailsViewDto extends BaseDto
{
    public int $id;
    public string $name;
    public int $quantity;
    public float $price;
    public float $priceTotal;
}