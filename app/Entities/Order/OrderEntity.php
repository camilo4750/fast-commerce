<?php

namespace App\Entities\Order;

use App\Entities\BaseEntity;
use Database\Factories\OrderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderEntity extends BaseEntity
{
    use HasFactory;

    protected $table = 'orders';

    protected static function newFactory(): OrderFactory
    {
        return OrderFactory::new();
    }
}
