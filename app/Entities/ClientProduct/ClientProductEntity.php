<?php

namespace App\Entities\ClientProduct;

use App\Entities\BaseEntity;
use Database\Factories\ClientProductFactory;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClientProductEntity extends BaseEntity
{
    use HasFactory;

    protected $table = 'client_product';

    protected static function newFactory(): ClientProductFactory
    {
        return ClientProductFactory::new();
    }
}
