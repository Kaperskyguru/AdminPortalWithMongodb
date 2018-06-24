<?php
  class Home
  {
    private $db;

    function __construct()
    {
      $this->db = new Database("posts");
    }
    
  }
