<?php

/**
 * Created by PhpStorm.
 * User: Kapersky Guru
 * Date: 5/20/2018
 * Time: 1:47 AM
 */
class Homes extends Controller
{
    private $homeModel;

    public function __construct()
    {
      $this->homeModel = $this->model('Home');
    }

    public function index()
    {
        $this->view('home/index');
    }

    public function about()
    {
        $this->view('home/about');
    }
}
