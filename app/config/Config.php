<?php


namespace App\config;


class Config
{
    public static function  get()
    {
        return(array(
            'dsn'=>'mysql:host=localhost;dbname=dms_sample',
            'user'=>'franc',
            'password'=>'come1234'
        ));
    }

}