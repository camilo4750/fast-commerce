<?php

namespace App\Mappers\Order;

use App\Dto\Order\OrderDto;
use App\Mappers\BaseMapper;

class OrderDtoMapper extends BaseMapper
{
    protected function getNewDto(): OrderDto
    {
        return new OrderDto();
    }

    public function createFromRequest(int $client_id): OrderDto
    {
        $dto = $this->getNewDto();
        $dto->client_id = $client_id;
        return $dto;
    }
}
