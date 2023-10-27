<?php

namespace App\Application\Auth;


use App\Application\Config\Config;

class Auth implements AuthInterface
{
    protected static $model;
    protected static $user;

    public static function init() :void
    {
        $model = Config::get('auth.model');
        self::$model = new $model();
    }

    public static function check(): bool
    {
        self::$user = self::$model->find('token', $_COOKIE['token']);
        return (bool)self::$user;
    }

    public static function user(): array
    {
        return [];
    }
}