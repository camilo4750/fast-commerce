<?php

namespace App\Mappers\Client;

use App\Dto\Client\ClientViewDto;
use App\Mappers\BaseMapper;

class ClientViewDtoMapper extends BaseMapper
{
    protected function getNewDto(): ClientViewDto
    {
        return new ClientViewDto();
    }

    public function createFromDbRecords($dbRecord): ClientViewDto
    {
        $dto = $this->getNewDto();
        $dto->id = $dbRecord->id;
        $dto->name = $dbRecord->name;
        $dto->email = $dbRecord->email;
        $dto->createdAt = $dbRecord->created_at;
        $dto->updatedAt = $dbRecord->updated_at;

        return $dto;
    }
}
