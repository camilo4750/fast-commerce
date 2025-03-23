<?php

namespace App\Dto\ClientProduct;

use App\Dto\BaseDto;

class ClientProductViewDto extends BaseDto
{
    public int $id;
    public string $name;
    public string $description;
    public float $price;
    public int $stock;
    public ?string $createdAt;
    public ?string $updatedAt;
}