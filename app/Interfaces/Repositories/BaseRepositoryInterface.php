<?php

namespace App\Interfaces\Repositories;

use App\Dto\CoreDto;
use App\Entities\CoreEntity;
use App\Models\User;

interface BaseRepositoryInterface
{
    public function setUser(User $user);
}
