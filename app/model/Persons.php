<?php


namespace App\model;

use App\config\Config;
use RedBeanPHP\Facade as R;


class Persons
{


    public function __construct()
    {
        $config= Config::get();
        //create connection with the database;
        R::setup($config['dsn'],$config['user'],$config['password']);
    }
    public function getList($page)
    {
        return R::findAll('person','id >= ? ORDER by id ASC LIMIT 10000',[$page]);
    }
}