<?php

namespace App\Application\Router;

class Router implements RouterInterface
{
    public function handle(array $routes): void
    {
        $uri = $_SERVER['REQUEST_URI'];

        foreach($routes as $route){
            if ($route['uri'] === $uri){
                $controller = new $route['controller']();
                $method = $route['method'];
                $controller->$method();
            }
        }
    }
}