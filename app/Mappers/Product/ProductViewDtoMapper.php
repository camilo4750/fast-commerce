<?php

namespace App\Mappers\Product;

use App\Dto\Product\ProductViewDto;
use App\Mappers\BaseMapper;

class ProductViewDtoMapper extends BaseMapper
{
    protected function getNewDto(): ProductViewDto
    {
        return new ProductViewDto();
    }

    public function createFromDbRecords(object $dbRecord): ProductViewDto
    {
        $dto = $this->getNewDto();
        $dto->id = $dbRecord->id;
        $dto->name = $dbRecord->name;
        $dto->description = $dbRecord->description;
        $dto->price = $dbRecord->price;
        $dto->stock = $dbRecord->stock;
        $dto->createdAt = $dbRecord->created_at;
        $dto->updatedAt = $dbRecord->updated_at;

        return $dto;
    }
}
