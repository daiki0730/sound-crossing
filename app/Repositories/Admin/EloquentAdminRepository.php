<?php

namespace App\Repositories\Admin;

use App\Models\Admin;

class EloquentAdminRepository implements AdminContract
{
    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {
            return Admin::create([
                'last_name'       => $data['last_name'],
                'first_name'      => $data['first_name'],
                'kana_last_name'  => $data['kana_last_name'],
                'kana_first_name' => $data['kana_first_name'],
                'gender'          => $data['gender']?? null,
                'email'           => $data['email'],
                'password'        => Hash::make($data['password']),
                'status'          => $data['status'],
                'role'            => $data['role'],
            ]);
        });
    }
}
