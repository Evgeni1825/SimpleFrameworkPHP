<?php

namespace App\Controllers;

use App\Application\Views\View;
use App\Models\User;
use App\Application\Request\Request;

class UserController
{
    public function register(Request $request)
    {
        // TODO Validation
        dd($request);
        $user = new User();
        $user->setEmail($request->post('email'));
        $user->setName($request->post('name'));
        $user->setPassword($request->post('password'));
        $user->store();
    }
}