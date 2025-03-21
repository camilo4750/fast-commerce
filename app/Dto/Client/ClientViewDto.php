<?php

namespace App\Dto\Client;

use App\Dto\BaseDto;

class ClientViewDto extends BaseDto
{
    public int $id;
    public string $name;
    public string $email;
    public $createdAt;
    public $updatedAt;
}
