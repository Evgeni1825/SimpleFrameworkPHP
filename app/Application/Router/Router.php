<?php

namespace App\Application\Router;

class Router implements RouterInterface
{
    use RouterHelper;
    public function handle(array $routes): void
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        $type = $requestMethod === 'POST' ? 'post' : 'page';
        $filteredRoutes = self::filter($routes, $type);
        
        foreach($filteredRoutes as $route){
            if ($route['uri'] === $uri){
                self::controller($route);
            }
            
        }

    }
}