<?php

namespace App\Services\User;

use App\Models\User;

class UserServices
{
    private User $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function createUser(array $data)
    {
        return $this->model::create($data);
    }
}
