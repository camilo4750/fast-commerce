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
    

}