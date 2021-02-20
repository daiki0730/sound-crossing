<?php

namespace App\Repository\User;

use App\Models\User;

class EloquentUserRepository implements UserContract
{
    /**
     * @param array $data
     * @return App\Models\User
     */
    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {
            return User::create([
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'status' => $data['status'],
                'role' => $data['role'],
                'email_verify_token' => base64_encode($data['email']),
                'last_name' => $data['last_name'] ?? null,
                'first_name' => $data['first_name'] ?? null,
                'kana_last_name' => $data['kana_last_name'] ?? null,
                'kana_first_name' => $data['kana_first_name'] ?? null,
                'gender' => $data['gender'] ?? null,
            ]);
        });
    }
}