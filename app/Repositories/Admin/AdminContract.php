<?php

namespace App\Repository\Admin;

interface AdminContract
{
    /**
     * create admin
     * @param array $data
     * @return App\Models\Admin
     */
    public function create(array $data);
}