<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/larapack/dd/src/helper.php';

use App\Application\Router\Route;
use App\Application\Router\Router;
use App\Controllers\PagesController;


Route::page('/home', PagesController::class, 'home');
Route::page('/about', PagesController::class, 'about');
Route::page('/contacts', PagesController::class, 'contacts');


$router = new Router();
$router->handle(Route::list());



