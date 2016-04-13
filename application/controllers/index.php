<?php


class IndexController extends EmmaController
{

    public function index()
    {

        $this->page();

        $this->CheckLogin();

    }

    public function page($page = "login")
    {

        Loader::view("pages/" . $page . ".php");


    }

    public function CheckLogin(){


        if($this->post("CheckLogin")) {
            error_reporting(0);
            $operator = new OperatorsTable();

            $mail = $this->post("inputEmail");
            $password = $this->post("inputPassword");

            $operator->find ("mail", $mail);




            if($operator->mail == $mail && $operator->password == sha1($password)){

                Session::set ("id", $operator->id);
                Session::set ("naam", $operator->firstname);

                $this->redirect ("?c=dashboard");
            }

            echo"Verkeerde inloggegevens, probeer het opnieuw.";




        }


    }


    public function logout(){
        Session::nullify ("mail");
        Session::nullify ("id");

        $this->redirect ("?c=index");

    }
}