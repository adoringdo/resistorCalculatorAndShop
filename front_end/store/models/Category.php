<?php

namespace store\models;
use PDO;

class Category
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllCategories()
    {
        $stmt = $this->db->prepare('SELECT * FROM categories');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}