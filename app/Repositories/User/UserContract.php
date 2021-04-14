<?php


namespace App\Repository\User;

interface UserContract
{
    public function getAllUsers();

    public function create(array $data);
}
