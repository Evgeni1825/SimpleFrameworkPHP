<?php

namespace App\Application\Router;

class Route implements RouteInterface
{
    private static array $routes;

    public static function page(string $uri, string $html): void
    {
        self::$routes[] = [
            'uri' => $uri,
            'html' => $html
        ];
    }

    public static function list(): array
    {
        return self::$routes;
    }
}