<?php
  class Home
  {
    private $dbPosts;

    function __construct()
    {
      $this->dbPosts = new Database("posts");
      $this->dbPages = new Database("pages");
      $this->dbUsers = new Database("users");
    }

    public function count($filter)
    {
        if ($filter == 'posts') {
            return $this->dbPosts->count();
        } elseif ($filter == 'pages') {
            return $this->dbPages->count();
        } else {
            return $this->dbUsers->count();
        }
    }

    public function getUsers()
    {
        return $this->dbUsers->selectAll();
    }
  }
