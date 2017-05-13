<?php

class Controller
{
    /**
     * Whenever controller is created, open a database connection too and load "the model".
     */

    function __construct()
    {
        session_start();
    }

    public function protect($input)
    {
        $input = htmlspecialchars($input);
        $input = trim($input);
        return $input;
    }
}
