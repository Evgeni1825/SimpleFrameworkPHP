<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/larapack/dd/src/helper.php';


use App\Application\Router\Route;
use App\Application\Router\Router;



require_once __DIR__ . '/routes/pages.php';


$router = new Router();
$router->handle(Route::list());



