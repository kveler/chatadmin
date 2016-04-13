<?php

class LoginController extends EmmaController{

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

    public function CheckLogin(){

        //$this->getOperators = $this->OperatorsModel->getAll();
        die(var_dump($mail, $password));

        if($this->post("CheckLogin")) {

            $mail = $this->post("inputEmail");
            $password = $this->post("inputPassword");

        }



        $this->page("dashboard");

    }


    
}

