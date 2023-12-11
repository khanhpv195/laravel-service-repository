<?php

namespace App\Services;
use App\Repositories\Eloquent\UserRepository;

class UserServices
{
    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public  function getAllUsersWithRoles(): \Illuminate\Database\Eloquent\Collection|array
    {
        return $this->userRepository->getAllUsersWithRoles();
    }
}
