<?php


namespace App\model;

use App\config\Db;
use RedBeanPHP\Facade as R;
use App\config\Config;

class Ticket
{

    public function getHistory($id)
    {
        //get the database connect
        $db = (new Db())->getDb();
        $sql= "SELECT * FROM ticket_purchase_hist WHERE purchased_by_id = ?";
        $stmt=$db->prepare($sql);
        $stmt->bindParam('1',$id);
        $stmt->execute();
        $result = $stmt->fetchAll();

        //close database connection
        (new Db())->closeDb();
        return $result;

        /*
         * RedbeanPHP is not working with the ticket_purchase_hist
         * it needs a primary key id(auto increment) to be able to convert table to bean
         */
        //return R::findAll('ticket_purchase_hist','purchased_by_id = ?',[$id]);
    }
}