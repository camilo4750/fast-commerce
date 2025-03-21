<?php

namespace App\Repositories\Client;

use App\Entities\Client\ClientEntity;
use App\Interfaces\Repositories\Client\ClientRepositoryInterface;
use App\Repositories\BaseRepository;
use Illuminate\Support\Collection;

class ClientRepository extends BaseRepository implements ClientRepositoryInterface
{
    public function getById($id)
    {
        return ClientEntity::find($id);
    }

    public function getByEmail($email)
    {
        return ClientEntity::query()->where("email", '=', $email)->first();
    }
}
