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

    public function getPostById($filter)
    {
        return $this->db->selectOne($filter);
    }

    public function insertPost(array $data)
    {
        $result = $this->db->insertSingle($data);
        return $result->getInsertedId();
    }

    public function updatePost($condition, $data)
    {

        $this->db->updateOne($condition, $data);
    }

  }
