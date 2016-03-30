<?php

class IndexController extends EmmaController
{

    public function index()
    {

        $this->page();

    }

    public function page($page = "dashboard")
    {

        Loader::view("templates/header.php");
        Loader::view("pages/" . $page . ".php");
        Loader::view("templates/footer.php");

    }


    public function getUserData(){

        $this->getUsers = $this->UserModel->getAll();


        $this->page("users");
    }

    public function addUserSubmit()
    {
        //Submit een nieuwe user naar de database
        $this->users = new UsersTable();

        if ($this->post("addUserSubmit")) {

            $firstname = $this->post("voornaam");
            $tussenvoegsel = $this->post("tussenvoegsel");
            $lastname = $this->post("achternaam");
            $company = $this->post("bedrijf");
            $email = $this->post("email");



            $this->users->insert
            (
                array
                (
                    "vnaam" => $firstname,
                    "tussenv" => $tussenvoegsel,
                    "achternaam" => $lastname,
                    "bedrijf" => $company,
                    "email" => $email
                )
            );

        }
        $this->page("add_user");


    }

    public function getTicketData(){

        $this->getTickets = $this->TicketModel->getAll();


        $this->page("tickets");
    }


    public function addTicketSubmit()
    {
        //Submit een nieuwe ticket naar de database

        $this->tickets = new TicketsTable();


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
                    "solved" => 0

                )
            );
        }
        $this->page("add_ticket");
    }

}