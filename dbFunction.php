<?php  
    class dbFunction { 
        function __construct() {             
        }  
        
        function __destruct() {  
              }  
        public function UserRegister($emailid, $password){  
            include 'dbConnect.php';
                $password = md5($password);  
                $qr = $conn->query("INSERT INTO users(emailid, password,statut) values('$emailid','$password','user')") or die(mysql_error());  
                return $qr;        
        }

        public function Login($emailid, $password){  
            include 'dbConnect.php'; 
            $mypassword=md5($password);
            var_dump($mypassword);
            $res=$conn->query("SELECT * FROM users WHERE emailid ='$emailid' AND password='$mypassword'");  
            if ($user_data=$res->fetch_assoc()) {
                $_SESSION['login']=true;   
			    $_SESSION["id"]=$user_data["id"]; 
                $_SESSION["email"]=$user_data["emailid"];
                $_SESSION["statut"]=$user_data["statut"];
                $_SESSION["fullname"]=$user_data["fullname"];

                return TRUE;
            }  
            else  
                return FALSE;         
        }  
        
    
        public function isUserExist($emailid){  
            include 'dbConnect.php'; 
            $qr = $conn->query("SELECT * FROM users WHERE emailid = '$emailid' ");  
            echo $row = mysqli_num_rows($qr);  
            if($row > 0)
                return true;  
            else   
                return false;  
            
        }  
        public function user_logout() {
                        $_SESSION['login'] = false;
                        session_destroy();
                    }
             

    }
    ?> 

    

    
      