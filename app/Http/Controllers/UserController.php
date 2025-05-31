<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(
        private readonly UserService $userService,
    )
    {
    }


    public function store(UserRequest $request)
    {
        $data = $request->validated();
        this->userService->register($data);
    }
}
