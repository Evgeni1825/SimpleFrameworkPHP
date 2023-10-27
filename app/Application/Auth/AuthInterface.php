<?php

namespace App\Application\Auth;

interface AuthInterface
{
    public static function check(): bool;

    public static function user(): array;
}