<?php
class FooModel 
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllFoos() 
    {
        return $this->db->query('SELECT * FROM table');
    }
}