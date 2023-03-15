 <?php 

 class LoginModel extends Dbh{

    protected $user;

    public function __construct(){
        $this->db=$this->connect();
    }

    //error handlers
    //check empty input fields
    public function emptyInput($email,$password){
        $result;
        if(empty($email) || empty($password)){
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
 
    public function login($email,$password){
        
        $query='SELECT firstName,lastName,email FROM login WHERE email = ? AND password = ?;';

        $stmt =$this->db->prepare($query);

        if(!$stmt->execute([$email,$password])){
            $stmt=null;
            header("location:./index.php?error=stmtfailed");
            exit();
        }     
        $resultCheck;
        if($stmt->rowcount()===1){
            $resultCheck=true;
            $this->user=$stmt->fetch();
        }else{
            $resultCheck=false;
        }
        return $resultCheck;  
    }
    
    // public function signUp($firstName,$lastName,$email,$password,$mobileNum){
    
    //     $query="INSERT INTO login (firstName, lastName, email, password, mobileNum) VALUES (?,?,?,?,?);";
        
    //     $stmt =$this->db->prepare($query);
    //     $stmt->execute([$firstName,$lastName,$email,$password,$mobileNum]);  

    // }
 }