<?php

namespace App\Repositories\Admin;

interface AdminContract
{
    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);
}
