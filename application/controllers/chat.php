<?php

class ChatController extends EmmaController{

    public function page($page = "dashboard")
    {

        Loader::view("templates/header.php");
        Loader::view("pages/" . $page . ".php");
        Loader::view("templates/footer.php");

    }

    public function getChatData(){
        $this->getChat = $this->ChatModel->getAll();

        $this->page("chats");
    }

    public function createChat(){
        
    }

}