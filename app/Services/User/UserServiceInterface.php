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

    /**
     * @param $id
     * @return mixed
     */
    public function getUserById($id);

    /**
     * @param array $array
     * @param int $id
     * @return mixed
     */
    public function update(array $array, int $id);
}
