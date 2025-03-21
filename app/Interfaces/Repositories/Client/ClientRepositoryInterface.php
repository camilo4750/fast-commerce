<?php

namespace App\Interfaces\Repositories\Client;

use App\Interfaces\Repositories\BaseRepositoryInterface;

interface ClientRepositoryInterface extends BaseRepositoryInterface {
     public function getById($id);

     public function getByEmail($email);
}
