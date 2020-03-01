<?php


namespace App\controller;


class Ticket
{
    public function ticketHist($id)
    {
        $ticket = new \App\model\Ticket();
        echo json_encode($ticket->getHistory($id));
    }
}