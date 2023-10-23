<?php

namespace App\Controllers;

class PagesController
{
    public function home() : void
    {
        echo '<h2>Home page</h2>';
    }

    public function about() : void
    {
        echo '<h2>About page</h2>';
    }

    public function contacts() : void
    {
        echo '<h2>Contacts page</h2>';
    }
}