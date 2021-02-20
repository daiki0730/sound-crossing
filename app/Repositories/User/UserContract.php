<?php


namespace App\Repository\User;

interface UserContract
{
    /**
     * @param array $data
     * @return App\Models\User
     */
    public function create(array $data);
}