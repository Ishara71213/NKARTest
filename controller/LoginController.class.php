<?php

class LoginController extends LoginModel{


    public function indexAction(){
        
        $this->routeManager();

        if(isset($_POST["submit"])){

            $email=$_POST["email"];
            $password=$_POST["password"];
            
            if($this->emptyInput($email,$password)){
                header("location:./index.php?action=login&error=emptyTnputs");
                die();
            }  
            if($this->invalidEmail($email)){
                header("location:./index.php?action=login&error=invalidEmail");
                die();
            }
            if($this->login($email,$password)){
                // var_dump($this->user);
                // header("location:./index.php?action=dashboard");
            }
            die();                 
        }
    }
    
    public function routeManager(){
        return require_once(__DIR__.'/../view/Login.php');
        
    }
}