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
        $countPages = $this->homeModel->count('pages');
        $countPosts = $this->homeModel->count('posts');
        $countUsers = $this->homeModel->count('users');
        $userData = $this->homeModel->getUsers();

        $data = [
            'postCount' => $countPosts,
            'pageCount' => $countPages,
            'userCount' => $countUsers,
            'users' => $userData
        ];
        $this->view('home/index', $data);
    }

    public function about()
    {
        $this->view('home/about');
    }
}
