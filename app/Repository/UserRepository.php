<?php

namespace App\Repository;
use App\Models\User;

class UserRepository
{
    public function getAllUser()
    {
        return User::get();
    }
}
