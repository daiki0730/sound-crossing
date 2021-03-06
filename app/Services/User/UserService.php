<?php

namespace App\Services\User;



use App\Repositories\User\UserContract;

class UserService implements UserServiceInterface
{
    /**
     * @var UserContract
     */
    private $userContract;

    /**
     * UserService constructor.
     * @param UserContract $userContract
     */
    public function __construct(UserContract $userContract)
    {
        $this->userContract = $userContract;
    }

    /**
     * @return mixed
     */
    public function getAllUsers()
    {
        return $this->userContract->getAllUsers();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->userContract->create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getUserById($id)
    {
        return $this->userContract->getUserById($id);
    }

    /**
     * @param array $array
     * @param int $id
     * @return mixed
     */
    public function update(array $array, int $id)
    {
        return $this->userContract->update($array, $id);
    }
  }
