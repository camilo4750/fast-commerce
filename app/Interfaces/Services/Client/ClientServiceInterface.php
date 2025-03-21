<?php

namespace App\Interfaces\Services\Client;

use App\Dto\Client\ClientViewDto;

interface ClientServiceInterface
{
    public function getById($id): ClientViewDto;

    public function getByEmail($email): ClientViewDto;
}
