<?php

class Page
{
    private $db;
    function __construct()
    {
        $this->db = new Database('pages');
    }

    public function getPages()
    {
        return $this->db->selectAll();
    }

    public function insertPage(array $data)
    {
        $result = $this->db->insertSingle($data);
        return $result->getInsertedId();
    }

}
