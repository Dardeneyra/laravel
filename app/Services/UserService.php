<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{

    public function __construct(
        private readonly UserRepository $userRepository,
    )
    {}

    public function register(array $data):void
    {
        $user = $this->userRepository->create($data);
    }
}
