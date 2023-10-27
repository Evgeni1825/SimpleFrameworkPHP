<?php

namespace App\Application\Auth;


use App\Application\Config\Config;

class Auth implements AuthInterface
{
    protected static $model;
    protected static $user;

    public function __construct()
    {
        $model = Config::get('auth.model');
        self::$model = new $model();
    }

    public static function check(): bool
    {
        self::$user = self::$model->find('token', $_COOKIE['token']);
    }

    public static function user(): array
    {
        return [];
    }
}