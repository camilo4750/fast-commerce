<?php

namespace App\Mappers\Product;

use App\Dto\Product\ProductUpdateStockDto;
use App\Mappers\BaseMapper;

class ProductUpdateStockDtoMapper extends BaseMapper
{
    protected function getNewDto(): ProductUpdateStockDto
    {
        return new ProductUpdateStockDto();
    }

    public function createFormObject(array $request): ProductUpdateStockDto
    {
        $dto = $this->getNewDto();
        $dto->product_id = $request['product_id'];
        $dto->quantity = $request['quantity'];
        return $dto;
    }
}
