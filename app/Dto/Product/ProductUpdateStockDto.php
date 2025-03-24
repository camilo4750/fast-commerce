<?php

namespace App\Dto\Product;

use App\Dto\BaseDto;

class ProductUpdateStockDto extends BaseDto {
    public int $product_id;
    public int $quantity;
}