<?php

namespace App\Mappers\OrderDetails;

use App\Dto\OrderDetails\OrderDetailsDto;
use App\Mappers\BaseMapper;

class OrderDetailsDtoMapper extends BaseMapper
{
    protected function getNewDto(): OrderDetailsDto
    {
        return new OrderDetailsDto();
    }

    public function createFromObject(array $request): OrderDetailsDto
    {
        $dto = $this->getNewDto();
        $dto->order_id = $request['order_id'];
        $dto->product_id = $request['product_id'];
        $dto->quantity = $request['quantity'];
        return $dto;
    }
}
