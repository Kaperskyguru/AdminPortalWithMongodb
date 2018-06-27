<?php

/**
 * Created by PhpStorm.
 * User: Kapersky Guru
 * Date: 5/20/2018
 * Time: 1:47 AM
 */
class Posts extends Controller
{
    private $postModel;

    public function __construct()
    {
      $this->postModel = $this->model('Post');
    }

    public function index()
    {

        $data = $this->postModel->getPosts();
        $this->view('posts/index', $data);
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['post_title'])){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $condition = [
                    "_id" => new MongoDB\BSON\ObjectId($id)
                ];

                $data = [
                    '$set' => ["post_title" => trim($_POST['post_title'])],
                    '$set' => ["post_desc" => trim($_POST['post_desc'])],
                    '$set' => ["post_tag" => $_POST['post_tag']],
                    '$set' => ["post_category" => $_POST['post_category']],
                ];

                $this->postModel->updatePost($condition, $data);
            }
        } else {
            $filter = ['_id' => new MongoDB\BSON\ObjectId($id)];
            $data = $this->postModel->getPostById($filter);
        }
        $this->view('posts/edit', $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['post_title'])){
                $result = [];
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'post_title' => trim($_POST['post_title']),
                    'post_desc' => $_POST['post_desc1'],
                    'post_tag' => $_POST['post_tag'],
                    'post_category' => $_POST['post_category'],
                    'status' => $_POST['status'],
                    'post_author' => 'Solomon Eseme',
                    'post_created' => new DateTime()
                ];
                echo $_POST['status'];
                $insertedId = $this->postModel->insertPost($data);
                if (!empty($insertedId)) {
                    $result = [
                        'id' => $insertedId,
                        "message" => "Post Successfully Added"
                    ];
                }
            } else {
                $result = [
                    'post_title' => '',
                    'message' => 'Post was not added',
                ];
            }

            $this->view('posts/add', $result);
        }
    }
}
