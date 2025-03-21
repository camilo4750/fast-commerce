<?php

namespace App\Entities\Client;

use App\Entities\BaseEntity;
use Database\Factories\ClientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClientEntity extends BaseEntity
{
    use HasFactory;

    protected $table = 'clients';

    protected static function newFactory()
    {
        return ClientFactory::new();
    }
}
