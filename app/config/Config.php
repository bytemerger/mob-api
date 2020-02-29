<?php


namespace App\config;


class Config
{
    public function __construct()
    {
        define('DB_DSN','mysql:host=localhost;dbname= dms_sample');
        define('DB_USERNAME','franc');
        define('DB_PASSWORD','come1234');
        define('LANGUAGE_TYPE','en');
    }

}