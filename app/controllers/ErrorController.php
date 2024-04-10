<?php

class ErrorController
{
    public function index()
    {
        load_view("error", "error", ["title" => "Page not found", "message" => "The page you are looking for does not exist."]);
    }
}
