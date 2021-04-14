<?php

namespace App\Services\User;

interface UserServiceInterface
{
    public function getAllUsers();

    public function create(array $data);
}
