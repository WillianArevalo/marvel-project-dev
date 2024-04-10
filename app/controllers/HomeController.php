<?php

require_once "app/api/Functions.php";

class HomeController
{

    public function index()
    {
        load_view("home", "index", [], true);
    }
}
