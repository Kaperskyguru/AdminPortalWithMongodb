<?php

/**
 * Created by PhpStorm.
 * User: Kapersky Guru
 * Date: 5/20/2018
 * Time: 2:17 AM
 */
abstract class Controller
{
    // Load Model
    public function model($model)
    {
        // Require the required Model
        if (file_exists('../app/models/'. $model . '.php')) {
            require_once '../app/models/' . $model . '.php';

            // Instantiate and return the model
            return new $model;

        } else {
            die('View does not exist');
        }
    }

    // Load Views
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die('View does not exist');
        }
    }
}
