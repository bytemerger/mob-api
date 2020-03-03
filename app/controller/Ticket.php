<?php


namespace App\controller;

header('content-type: application/json');

class Ticket
{
    public function ticketHist($id)
    {
        $ticket = new \App\model\Ticket();
        echo json_encode($ticket->getHistory($id));
    }
}