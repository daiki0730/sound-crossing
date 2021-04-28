<?php

namespace App\Services\User;

interface UserServiceInterface
{
    /**
     * @return mixed
     */
    public function getAllUsers();

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);
}
