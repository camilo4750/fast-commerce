<?php

namespace App\Dto\Product;
 
use App\Dto\BaseDto;

class ProductViewDto extends BaseDto
{
    public int $id;
    public string $name;
    public string $description;
    public float $price;
    public int $stock;
    public ?string $createdAt;
    public ?string $updatedAt;
}