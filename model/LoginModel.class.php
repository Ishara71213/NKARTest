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
        
        // $query='SELECT firstName,lastName,email FROM login WHERE email = ? AND password = ?;';
        $query='SELECT firstName,lastName,email,password FROM login WHERE email = ?;';

        $stmt =$this->db->prepare($query);

        
        if(!$stmt->execute([$email])){
            $stmt=null;
            header("location:./index.php?error=stmtfailed");
            exit();
        } 

        $resultCheck;
        if($stmt->rowcount()===1){
            $this->user=$stmt->fetch();
            // print_r($this->user);
            // print_r(password_verify($password, $this->user['password']));
            
            if(password_verify($password, $this->user['password'])){
                $resultCheck=true;
                $_SESSION["email"]=$this->user['email'];
                $_SESSION["firstName"]=$this->user['firstName'];
                $_SESSION["lastName"]=$this->user['lastName'];
            }else{
                $resultCheck=false;
            }
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