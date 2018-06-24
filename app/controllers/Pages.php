<?php

/**
 * Created by PhpStorm.
 * User: Kapersky Guru
 * Date: 5/20/2018
 * Time: 1:47 AM
 */
class Pages extends Controller
{
    private $pageModel;

    public function __construct()
    {
      $this->pageModel = $this->model('Page');
    }

    public function index()
    {
        $data = $this->pageModel->getPages();
        $this->view('pages/index', $data);
    }

    public function edit()
    {
        $this->view('pages/edit');
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['page_title'])){
                $result = [];
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'page_title' => trim($_POST['page_title']),
                    'page_desc' => trim($_POST['addPageEditor']),
                    'page_tag' => $_POST['page_tag'],
                    'page_meta_desc' => $_POST['page_meta_desc'],
                    'status' => $_POST['status'],
                    'page_author' => 'Solomon Eseme',
                    'page_created' => new DateTime()
                ];

                $insertedId = $this->pageModel->insertPage($data);
                if (!empty($insertedId)) {
                    array_push($result, [
                        'status' => $_POST['status'],
                        'id' => $insertedId,
                        "message" => "Page Successfully Added"
                    ]);
                }
            } else {
                $result = [
                    'page_title' => '',
                    'message' => 'Page was not added',
                ];
            }
            if(isset($_POST['status'])){
                $sta = "true";
                $this->view('pages/add', $sta);
            }else {
                $sta = "false";
                $this->view('pages/add', $_POST);
            }

        }
    }


}
