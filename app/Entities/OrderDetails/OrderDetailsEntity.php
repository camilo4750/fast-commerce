<?php

namespace App\Entities\OrderDetails;

use App\Entities\BaseEntity;
use Database\Factories\OrderDetailsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetailsEntity extends BaseEntity
{
    use HasFactory;

    protected $table = 'order_details';

    protected static function newFactory(): OrderDetailsFactory
    {
        return OrderDetailsFactory::new();
    }
}
