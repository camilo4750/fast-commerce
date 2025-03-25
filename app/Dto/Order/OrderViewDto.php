<?php

namespace App\Dto\Order;

use App\Dto\BaseDto;

class OrderViewDto extends BaseDto
{
    public int $id;
    public string $createdAt;
}