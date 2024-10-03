<?php

namespace App\Services;
use App\Repository\UserRepository;

class UserService{

    private $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUser(){
        return $this->userRepository->getAllUser();
    }


}
