<?php

class TicketController extends EmmaController
{

    public function init(){

        if(session::get("id")== false){
            $this->redirect ("?c=index");
        }

    }

    public function page($page = "dashboard")
    {

        Loader::view("templates/header.php");
        Loader::view("pages/" . $page . ".php");
        Loader::view("templates/footer.php");

    }

    public function getTicketData(){

        $this->getTickets = $this->TicketModel->getAll();

        $this->page("tickets");
    }

    public function getOneTicketData($id){
        $this->ticket = $this->TicketModel->get ($id);

        //die(var_dump($this->ticket));

        if($this->ticket == NULL)
        {
            die("Kan ticket niet ophalen");
        }


        $this->page("show_ticket");
    }


    public function addTicketSubmit()
    {
        //Submit een nieuwe ticket naar de database

        $this->tickets = new TicketsTable();

        $t = time();


        if ($this->post("addTicketSubmit"))
        {

            $this->tickets = new TicketsTable();

            $userid = $this->post("userid");
            $ticket = $this->post("ticket");

            $this->tickets->insert
            (
                array
                (
                    "user_id" => $userid,
                    "ticket" => $ticket,
                    "solved" => 0,
                    "date" => $t
                )
            );
        }
        $this->page("add_ticket");
    }

    public function solveTicket(){

        $tickets = new TicketsTable();

        $tickets->find("id",$this->arg);

        $tickets->solved = 1;

        $tickets->save();

        $this->getTicketData();
        
    }


}