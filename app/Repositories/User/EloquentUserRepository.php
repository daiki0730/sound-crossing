<?php

namespace App\Repositories\User;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EloquentUserRepository implements UserContract
{
    /**
     * {@inheritdoc}
     */
    public function getAllUsers()
    {
        return User::all();
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
        $user = new User();
        $user->fill($data);

        return DB::transaction(function () use ($user, $data) {
            $user->save();
            return $user;
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getUserById($id)
    {
        return User::find($id);
    }

    /**
     * {@inheritdoc}
     */
    public function update(array $array, int $id)
    {
        $user = User::find($id);
        $user->fill($array);

        return DB::transaction(function () use ($user) {
            $user->update();
            return $user;
        });
    }
}
