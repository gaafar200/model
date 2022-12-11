<?php

class Login
{
    public function index(){
        $data = array();
        $user = new User();
        $Auth = new Auth();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
             $check = $user->validateLoginData($_POST);
             if($check === true){
                $login = $Auth->login($_POST);
                if($login !== false){
                    $this->redirect("Home",$login);
                }
             }
        }
        $this->view("login");
    }

    public function view($path , $data = [])
    {
        extract($data);
        if(file_exists("../app/views/" . $path . ".view.php"))
        {
            include "../app/views/" . $path . ".view.php";
        }
    }
    public function redirect($path = ""){
        header("Location: " . ROOT . $path);
        die;
    }
}