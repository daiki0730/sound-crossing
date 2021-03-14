<?php

namespace App\Repository\User;

use App\Models\User;

class EloquentUserRepository implements UserContract
{
    public function getAllUsers()
    {
        return User::all();
    }
}