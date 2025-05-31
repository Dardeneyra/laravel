<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{

    public function create()
    {
        return User::create($data);
    }
}
