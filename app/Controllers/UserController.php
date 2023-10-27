<?php

namespace App\Controllers;

use App\Application\Helpers\Random;
use App\Application\Router\Redirect;
use App\Application\Views\View;
use App\Models\User;
use App\Application\Request\Request;

class UserController
{
    public function register(Request $request)
    {
        // TODO Validation

        $user = new User();
        $user->setEmail($request->post('email'));
        $user->setName($request->post('name'));
        $user->setPassword($request->post('password'));
        $user->store();
        Redirect::to('/login');
    }

    public function login(Request $request)
    {
        $user = (new User())->find('email', $request->post('email'));

        if ($user){
            if(password_verify($request->post('password'), $user->getPassword())){
                $token = Random::str(50);
                $user->update(['token'=>$token]);
                dd('auth ok', );
            } else{
                dd('incorrect password');
            }
        } else{
            dd('user not found');
        }
        
    }
}