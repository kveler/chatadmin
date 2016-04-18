<?php

class OperatorController extends EmmaController{

    public function page($page = "dashboard")
    {

        Loader::view("templates/header.php");
        Loader::view("pages/" . $page . ".php");
        Loader::view("templates/footer.php");

    }
    
    public function getOperatorsData(){
        $this->getOperators = $this->OperatorsModel->getAll();

        $this->page("operators");
    }

    public function addOperatorSubmit()
    {


        //Submit een nieuwe user naar de database
        $this->operators = new OperatorsTable();

        if ($this->post("addOperatorSubmit")) {
            $firstname = $this->post("voornaam");
            $tussenvoegsel = $this->post("tussenvoegsel");
            $lastname = $this->post("achternaam");
            $email = $this->post("email");
            $inlognaam = $this->post("inlognaam");
            $wachtwoord = sha1($this->post("wachtwoord"));



            $this->operators->insert
            (
                array
                (
                    "firstname" => $firstname,
                    "middlename" => $tussenvoegsel,
                    "lastname" => $lastname,
                    "mail" => $email,
                    "password" => $wachtwoord,
                    "username" => $inlognaam
                )
            );
            $this->page("add_operator_succes");
            exit();

        }
        $this->page("add_operator");


    }

}