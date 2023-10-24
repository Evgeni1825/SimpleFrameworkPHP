<?php

namespace App\Application;

use App\Application\Router\Route;
use App\Application\Router\Router;
use App\Exceptions\ViewNotFoundException;

class App
{
    public function run(): void
    {
       try {
             $this->handle();
       } catch (\ViewNotFoundException $exception)
       {
            dd($exception->getMessage());
       }
    }

    private function handle(): void
    {
        require_once __DIR__ . '/../../routes/pages.php';
        $router = new Router();
        $router->handle(Route::list());
    }
}