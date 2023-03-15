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
            
            // if(isset($_FILES["userimage"]) && $_FILES["userimage"]['error']===0){
            //     $file=$_FILES["userimage"];
            //     $imageName=$file['name'];
            //     // $imageFull_path=$file['full_path'];
            //     $imageType=$file['type'];
            //     $imageTmp_name=$file['tmp_name'];
            //     $imageError=$file['error'];
            //     $imageSize=$file['size'];
            //     print_r($file);

            //     $imageExtArr=explode(".",$imageName);
            //     $imageExt=strtolower(end($imageExtArr));
            //     $allowedFileTypes=array('jpg','png');

            //     if(in_array($imageExt,$allowedFileTypes)){
            //             if($imageSize<1000000){
            //                 $imageUpdatedName="username-". date("Ymd")."-".date("His").".".$imageExt;
            //                 $fileDestination="../userimages/".$imageUpdatedName;
            //                 move_uploaded_file($imageTmp_name,$fileDestination);
            //             }else{
            //                 echo "file too large";
            //             }
            //     }else{
            //         echo "file not suppourted format";
            //     }
            // }else{
            //     echo "file upload failed";
            // }
            $this->signUp($firstName,$lastName,$email,$password,$mobilenumber,$file);
            die();
        }

    }
    
    public function routeManager(){
        return require_once(__DIR__.'/../view/Signup.php');  
    }
}