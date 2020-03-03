<?php

//require autoload file
require __DIR__.'/vendor/autoload.php';

//require redbean php
require  __DIR__.'/helper/ORM/RedBeanPHP5_4_2/rb.php';

\App\controller\Auth::Auth();

$klein = new Klein\Klein();

$klein->respond('GET','/persons/?/[:page]?',function ($request){
    $person = new App\controller\Person();
    $person->getlist($request->page);
});
$klein->respond('GET','/ticket/person/[:id]',function ($request){
    $ticket = new App\controller\Ticket();
    $ticket->ticketHist($request->id);
});
$klein->dispatch();