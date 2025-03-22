<?php

namespace App\Mappers\Client;

use App\Dto\Client\ClientDto;
use App\Mappers\BaseMapper;

class ClientDtoMapper extends BaseMapper
{
    protected function getNewDto(): ClientDto
    {
        return new ClientDto();
    }


    public function createFromDbRecords(object $dbRecord): ClientDto
    {
        $dto = $this->getNewDto();
        $dto->id = $dbRecord->id;
        $dto->name = $dbRecord->name;
        $dto->email = $dbRecord->email;
        $dto->created_at = $dbRecord->created_at;
        $dto->updated_at = $dbRecord->updated_at;

        return $dto;
    }
}
