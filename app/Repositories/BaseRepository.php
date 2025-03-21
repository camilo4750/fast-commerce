<?php

namespace App\Repositories;

use App\Interfaces\Repositories\BaseRepositoryInterface;
use App\Models\User;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected ?User $user = null;
    
    public function setUser(User $user)
    {
        $this->user = $user;
        return $this;
    }
}
