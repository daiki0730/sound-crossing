<?php

namespace App\Services\User;

use App\Repository\User\UserContract;

class UserService implements UserServiceInterface
{
    /* @var UserContract **/
    private $userContract;

    public function __construct(UserContract $userContract)
    {
        $this->userContract = $userContract;
    }

    /**
     * @param array $data
     * @return App\Models\User
     */
    public function create(array $data)
    {
        return $this->userContract->create($data);
    }
  }