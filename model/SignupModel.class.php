<?php 

require "../classes/ImageUpload.class.php";
// require "../MODEL/LoginModel.class.php";

 class SignupModel extends Dbh{

    public function __construct(){
        $this->db=$this->connect();
    }

    //error handlers
    //check empty input fields
    public function emptyInput($firstName,$lastName,$email,$password,$confirmPassword,$mobilenumber){
        
        $result;
        if(empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword) || empty($mobilenumber)){
            $result=true;
        }
        else{
            $result=false;
        }
        return $result;
    }
    //check email format
    public function invalidEmail($email){
        $result;
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $result=true;
        }
        else{
            $result=false;
        }
        return $result;
    }
       //check email in the data base to prevent duplicate email entries
    public function checkUser($email){
        
        $query='SELECT email FROM login WHERE email = ?;';

        $stmt =$this->db->prepare($query);

        if(!$stmt->execute([$email])){
            $stmt=null;
            header("location:./index.php?action=signup&error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowcount()>0){
            $resultCheck=true;
        }else{
            $resultCheck=false;
        }
        return $resultCheck;
    }
     //check password match
    public function passwordNotMatch($password,$confirmPassword){
        $result;
        if($password!==$confirmPassword){
            $result=true;
        }
        else{
            $result=false;
        } 
        return $result;
    }
    //Imvalid image file type
      public function imageNotMatch($file){
        $filename = $file['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = array("apng","bmp","gif","jpeg","pjpeg","png","svg","tiff","webp","x-icon","jpg");
        $result;
        if (!in_array($ext, $allowed)) {
            $result=true;
       }
        else{
            $result=false;
        } 
        return $result;
    }
    
    
    public function signUp($firstName,$lastName,$email,$password,$mobileNum,$file){
        
            $query="INSERT INTO login (firstName, lastName, email, password, mobileNum) VALUES (?,?,?,?,?);";
            try{
                $this->db->beginTransaction();
                $stmt =$this->db->prepare($query);
                
                $options = [
                    'cost' => 12,
                ];
                $hasedPassword=password_hash($password, PASSWORD_BCRYPT, $options);

                $stmt->execute([$firstName,$lastName,$email,$hasedPassword,$mobileNum]);  
                $lastUserId = $this->db->lastInsertId("userId");
               
                $imageUpload=new ImageUpload($file);
                $imageUpload->saveImage($lastUserId);
                $this->db->commit();
                                
                $_SESSION["email"]=$email;
                $_SESSION["firstName"]=$firstName;
                $_SESSION["lastName"]=$tlastName;
                header("location:./index.php?action=dashboard&success=usercreated");
                
            }catch(Exception $e){
                header("location:./index.php?action=signup&error=failedtoCreateUser");
            }
            
            exit();
        }
        

    // }
 }