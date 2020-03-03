<?php


namespace App\controller;

use App\model\Persons;
header('content-type: application/json');
class Person
{
    //function to get the list of persons
    public function getlist($page){

        //variable to hold the next page to get
        $start = $page * 10000;

        //start from page one if page is not assigned
        if (empty($page))
        {
            $start=1;
        }
        $list = new Persons();
        echo json_encode($list->getList($start));
    }
}