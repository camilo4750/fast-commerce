<?php

namespace App\Services\Client;

use App\Dto\Client\ClientViewDto;
use App\Exceptions\Client\ClientNotFoundException;
use App\Interfaces\Repositories\Client\ClientRepositoryInterface;
use App\Interfaces\Services\Client\ClientServiceInterface;
use App\Mappers\Client\ClientViewDtoMapper;

class ClientServices implements ClientServiceInterface
{
    private array $errors = [];
    protected ClientRepositoryInterface $employeeRepo;

    public function __construct()
    {
        $this->employeeRepo = app(ClientRepositoryInterface::class);
    }

    public function getById($id): ClientViewDto
    {
        $client = $this->employeeRepo->getById($id);

        throw_if(
            !$client,
            new ClientNotFoundException(message: "Cliente no encontrado en el sistema")
        );

        return (new ClientViewDtoMapper)->createFromDbRecords($client);
    }

    public function getByEmail($email): ClientViewDto
    {
        $client = $this->employeeRepo->getByEmail($email);

        throw_if(
            !$client,
            new ClientNotFoundException(message: "Cliente no encontrado en el sistema")
        );

        return (new ClientViewDtoMapper)->createFromDbRecords($client);
    }
}
