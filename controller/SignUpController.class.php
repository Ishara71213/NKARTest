<?php

class SignUpController extends SignupModel{


    public function indexAction(){
        
        $this->routeManager();

        if(isset($_POST["submit"])){

            $firstName=$_POST["firstName"];
            $lastName=$_POST["lastName"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $confirmPassword=$_POST["confirmPassword"];
            $mobilenumber=$_POST['mobilenumber'];
            
            if($this->emptyInput($firstName,$lastName,$email,$password,$mobilenumber)){
                header("location:./index.php?error=emptyTnputs");
                die();
            }  
            if($this->invalidEmail($email)){
                header("location:./index.php?error=invalidEmail");
                die();
            }
            if($this->checkUser($email)){
                header("location:./index.php?error=emailAlreadyExists");
                die();
            }
            if($this->passwordNotMatch($password,$confirmPassword)){
                header("location:./index.php?error=passwordNotMatching");
                die();
            }
            $this->signUp($firstName,$lastName,$email,$password,$mobilenumber);
            die();
        }

    }
    
    public function routeManager(){
        return require_once(__DIR__.'/../view/SignUp.php');  
    }
}