<?php
class UserController extends EmmaController
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

    public function getUserData(){

        $this->getUsers = $this->UserModel->getAll();


        $this->page("users");
    }

    public function getOneUserData($id){

        $this->user = $this->UserModel->get ($id);


        $this->page("show_user");
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
                    "email" => $email,
                    "aangemaakt" => time()
                )
            );
            $this->page("add_user_succes");
            exit();
        }

        $this->page("add_user");

    }


}