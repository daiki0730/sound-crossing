<?php

namespace App\Repositories\User;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EloquentUserRepository implements UserContract
{
    /**
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllUsers()
    {
        return User::all();
    }

    /**
     * @param array $data
     * @return mixed
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
     * @param $id
     * @return mixed
     */
    public function getUserById($id)
    {
        return User::Where($id);
    }
}
