<?php


namespace App\model;

use RedBeanPHP\Facade as R;

class Persons
{

    public function __construct()
    {
        //create connection with the database;
        R::setup(DB_DSN,DB_USERNAME,DB_PASSWORD);
    }
}