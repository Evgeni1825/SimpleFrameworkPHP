<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/larapack/dd/src/helper.php';

use App\Application\Router\Route;
use App\Application\Router\Router;

Route::page('/home', '<h2>Home page</h2>');
Route::page('/about', '<h2>About page</h2>');
Route::page('/contacts', '<h2>Contacts page</h2>');

$router = new Router();
$router->handle(Route::list());



