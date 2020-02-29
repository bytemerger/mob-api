<?php

//require autoload file
require __DIR__.'/vendor/autoload.php';

//require redbean php
require  __DIR__.'/helper/ORM/RedBeanPHP5_4_2/rb.php';

//instantiate config
new App\config\Config();


$klein = new Klein\Klein();

$klein->respond('GET','/persons',function (){
    echo'we are in persons route';
});
$klein->respond('GET','/ticket/person/[:id]',function ($request){
    echo "we are in ticket histry".$request->id;
});
$klein->dispatch();