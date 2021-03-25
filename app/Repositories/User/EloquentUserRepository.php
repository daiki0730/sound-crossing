<?php

namespace App\Repository\User;

use App\Models\User;

class EloquentUserRepository implements UserContract
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function create(array $data)
    {
        $user = new User();
        $user->fill($data);

        return DB::transaction(function () use ($user, $data) {
            $user->save();
            return $user;
        });
    }
}
