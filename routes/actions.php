<?php

use App\Application\Router\Route;
use App\Controllers\ContactsController;

Route::post('/contacts', ContactsController::class, 'submit');