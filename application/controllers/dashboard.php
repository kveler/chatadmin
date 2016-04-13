<?php


class DashboardController extends EmmaController
{

    public function init(){

        if(session::get("id")== false){
            $this->redirect ("?c=index");
        }

    }

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



}