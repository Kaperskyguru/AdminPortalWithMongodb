<?php

/**
 * Created by PhpStorm.
 * User: Kapersky Guru
 * Date: 5/20/2018
 * Time: 1:47 AM
 */
class Users extends Controller
{
    private $userModel;

    public function __construct()
    {
      $this->userModel = $this->model('User');
    }

    public function login()
    {
        $this->view('users/login');
    }

    public function index()
    {
        $data = $this->userModel->getUsers();
        $this->view('users/index', $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['full_name'])){
                $result = [];
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'full_name' => trim($_POST['full_name']),
                    'addUserEditor' => $_POST['addUserEditor'],
                    'email' => $_POST['email'],
                    'user_role' => $_POST['user_role'],
                    'status' => $_POST['status'],
                    'user_created' => new DateTime()
                ];
                $insertedId = $this->userModel->insertUser($data);
                if (!empty($insertedId)) {
                    $result = [
                        'id' => $insertedId,
                        "message" => "Post Successfully Added"
                    ];
                }
            } else {
                $result = [
                    'full_name' => '',
                    'message' => 'Post was not added',
                ];
            }

            $this->view('users/add', $result);
        }
    }
}
