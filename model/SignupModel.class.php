 <?php 

 class SignupModel extends Dbh{

    public function __construct(){
        $this->db=$this->connect();
    }

    //error handlers
    //check empty input fields
    public function emptyInput($firstName,$lastName,$email,$password,$mobilenumber){
        $result;
        if(empty($firstName) && empty($lastName) && empty($email) && empty($password) && empty($confirmPassword) && empty($mobilenumber)){
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
            header("location:./index.php?error=stmtfailed");
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
    
    public function signUp($firstName,$lastName,$email,$password,$mobileNum){
    
        $query="INSERT INTO login (firstName, lastName, email, password, mobileNum) VALUES (?,?,?,?,?);";
        
        $stmt =$this->db->prepare($query);
        $stmt->execute([$firstName,$lastName,$email,$password,$mobileNum]);  

    }
 }