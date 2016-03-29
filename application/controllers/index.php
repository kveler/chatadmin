<?php

/**
 * Default Controller of the EmmaPHP MVC Framework
 */
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

    public function settings()
    {
        //Submit een nieuwe user naar de database
        $this->users = new UsersTable ();

        if ($this->post("addUserSubmit")) {

            $firstname = $this->post("voorname");
            $tussenvoegsel = $this->post("tuzzenvoegsel");
            $lastname = $this->post("lastname");
            $company = $this->post("company");
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


    public function addTicket()
    {
        //Submit een nieuwe ticket naar de database

        $this->page ("add_ticket");

        if ($this->post("addTicketSubmit")) {

            die ("runned dit uberhaupt????");

            $this->tickets = new TicketsTable();

            $userid = $this->post("userid");
            $ticket = $this->post("ticket");

            die (var_dump($userid . " - " . $ticket));

            $this->tickets->insert
            (
                array
                (
                    "user_id" => $userid,
                    "ticket" => $ticket

                )
            );
        }

    }

}