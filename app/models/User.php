<?php

class User
{
    private $db;
    function __construct()
    {
        $this->db = new Database("users");
    }

    public function getUsers()
    {
        return $this->db->selectAll();
    }

    public function insertUser($data)
    {
        $result = $this->db->insertSingle($data);
        return $result->getInsertedId();
    }
}
