<?php

namespace App\Mappers\OrderDetails;

use App\Dto\OrderDetails\OrderDetailsViewDto;
use App\Mappers\BaseMapper;

class OrderDetailsViewDtoMapper extends BaseMapper
{
    protected function getNewDto(): OrderDetailsViewDto
    {
        return new OrderDetailsViewDto();
    }


    public function createFromDbRecords(object $dbRecord): OrderDetailsViewDto
    {
        $dto = $this->getNewDto();
        $dto->id = $dbRecord->id;
        $dto->name = $dbRecord->name;
        $dto->quantity = $dbRecord->quantity;
        $dto->price = $dbRecord->price;
        $dto->priceTotal = $dbRecord->price_total;

        return $dto;
    }

    public function createCollectionFromDbRecords(object $dbRecord)
    {
        return $dbRecord->map(function ($order) {
            return $this->createFromDbRecords($order);
        })->all();
    }
}
