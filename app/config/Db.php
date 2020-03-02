<?php


namespace App\config;


class Db
{
    private $db;

    public function __construct()
    {
        $config = Config::get();
        $this->db = new \PDO($config['dsn'],$config['user'],$config['password']);
    }

    public function getDb(){
        return $this->db;
    }
    public function closeDb()
    {
        $this->db = null;
    }

}