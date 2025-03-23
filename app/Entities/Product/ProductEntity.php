<?php

namespace App\Entities\Product;

use App\Entities\BaseEntity;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductEntity extends BaseEntity
{
    use HasFactory;

    protected $table = 'products';

    protected static function newFactory(): ProductFactory
    {
        return ProductFactory::new();
    }
}
