<?php


namespace App\Repositories\User;

interface UserContract
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
