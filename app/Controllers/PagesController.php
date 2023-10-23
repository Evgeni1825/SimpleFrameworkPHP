<?php

namespace App\Controllers;

class PagesController
{
    public function home() : void
    {
        include __DIR__ . '/../../views/pages/home.php';
    }

    public function about() : void
    {
        include __DIR__ . '/../../views/pages/about.php';
    }

    public function contacts() : void
    {
        include __DIR__ . '/../../views/pages/contacts.php';
    }
}