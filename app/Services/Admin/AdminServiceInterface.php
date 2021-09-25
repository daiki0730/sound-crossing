<?php

namespace App\Services\Admin;

use App\Models\Admin;

interface AdminServiceInterface
{
    /**
     * create admin
     * @param array $data
     * @return App\Models\Admin
     */
    public function create(array $data);

    /**
     * create admin
     * @param array $data
     * @return App\Models\Admin
     */
    public function update(array $data);
}
