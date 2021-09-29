<?php


namespace App\Services\Admin;

use App\Models\Admin;
use App\Repository\Admin\AdminContract;

abstract class AdminService implements AdminServiceInterface
{
    /* ClubContract **/
    private $adminContract;

    public function __construct(AdminContract $adminContract)
    {
        $this->adminContract = $adminContract;
    }

     /**
      * {@inheritdoc}
      */
     public function create(array $data)
     {
         return $this->adminContract->create($data);
     }
}
