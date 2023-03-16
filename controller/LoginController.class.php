<?php

 
class LoginController extends LoginModel{


    public function indexAction(){
        
        $this->routeManager();

        if(isset($_POST["submit"])){

            $email=$_POST["email"];
            $password=$_POST["password"];

           
            if($this->emptyInput($email,$password)){
                header("location:./index.php?action=login&error=emptyInputs");
                die();
            }  
            if($this->invalidEmail($email)){
                header("location:./index.php?action=login&error=invalidEmail");
                die();
            }
            if($this->login($email,$password)){
               
                header("location:./index.php?action=dashboard&success=userLogIn");
                // $debug=$this->login($email,$password);
            }else{
                header("location:./index.php?action=login&error=invalidEmailPwCom");
            }
            die();                 
        }
    }
    
    public function routeManager(){
        return require_once(__DIR__.'/../view/Login.php'); 
    }
}