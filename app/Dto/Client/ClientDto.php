<?php

namespace App\Dto\Client;

use App\Dto\BaseDto;

class ClientDto extends BaseDto
{
    public int $id;
    public string $name;
    public string $email;
    public $created_at;
    public $updated_at;
}
