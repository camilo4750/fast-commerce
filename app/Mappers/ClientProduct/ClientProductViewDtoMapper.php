<?php

namespace App\Mappers\ClientProduct;

use App\Dto\ClientProduct\ClientProductViewDto;
use App\Mappers\BaseMapper;

class ClientProductViewDtoMapper extends BaseMapper
{
    protected function getNewDto(): ClientProductViewDto
    {
        return new ClientProductViewDto();
    }


    public function createFromDbRecords(object $dbRecord): ClientProductViewDto
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

    public function createCollectionFromDbRecords(object $products)
    {
        return $products->map(function ($product) {
            return $this->createFromDbRecords($product);
        })->all();
    }
}
