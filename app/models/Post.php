<?php
  class Post
  {
    private $db;

    function __construct()
    {
      $this->db = new Database("posts");
    }

    public function getPosts()
    {
        return $this->db->selectAll();
    }

    public function insertPost(array $data)
    {
        $result = $this->db->insertSingle($data);
        return $result->getInsertedId();
    }
  }
