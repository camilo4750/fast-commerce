<?php

namespace App\Mappers\Order;

use App\Dto\Order\OrderViewDto;
use App\Mappers\BaseMapper;

class OrderViewDtoMapper extends BaseMapper
{
    protected function getNewDto(): OrderViewDto
    {
        return new OrderViewDto();
    }

    public function createFromDbRecords(object $dbRecord): OrderViewDto
    {
        $dto = $this->getNewDto();
        $dto->id = $dbRecord->id;
        $dto->createdAt = $dbRecord->created_at;
        return $dto;
    }

    public function createCollectionFromDbRecords(object $dbRecord)
    {
        return $dbRecord->map(function ($order) {
            return $this->createFromDbRecords($order);
        })->all();
    }
}