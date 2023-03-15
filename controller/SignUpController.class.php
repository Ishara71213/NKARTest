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
            $file=$_FILES["userimage"];
            
            if($this->emptyInput($firstName,$lastName,$email,$password,$confirmPassword,$mobilenumber)){
                header("location:./index.php?action=signup&error=emptyInputs");
                die();
            }  
            if($this->invalidEmail($email)){
                header("location:./index.php?action=signup&error=invalidEmail");
                die();
            }
            if($this->checkUser($email)){
                header("location:./index.php?action=signup&error=emailAlreadyExists");
                die();
            }
            if($this->passwordNotMatch($password,$confirmPassword)){
                header("location:./index.php?action=signup&error=passwordNotMatching");
                die();
            }
            
        
            $this->signUp($firstName,$lastName,$email,$password,$mobilenumber,$file);
            die();
        }

    }
    
    public function routeManager(){
        return require_once(__DIR__.'/../view/Signup.php');  
    }
}