<?php

namespace App\Services\User;

interface UserServiceInterface
{
    /**
     * @param array $data
     * @return App\Models\User
     */
    public function create(array $data);
}