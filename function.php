<?php
define('DB_SERVER','localhost');// Your hostname
define('DB_USER','root'); // Databse username
define('DB_PASS' ,''); // Database Password
define('DB_NAME', 'gestion_reservations');// Database name
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
}

// Function for registration
public function registration($trn_date,$nom,$prenom,$email,$password)
{
    $checkuser = mysqli_query("select * from users where email='$email'");  
        $result = $checkuser->num_rows;
        if ($result == 0) {  
            $ret=mysqli_query($this->dbh,"insert into users(trn_date,nom,prenom,email,password,statut) values('$trn_date','$nom','$prenom','$email','$password','user')");
            return true; 
        } else {  
             return false;
        }  

}

// Function for signin
public function signin($email,$password)
{
$check=mysqli_query($this->dbh,"select id,nom,prenom from users where email='$email' and password='$password'");
$data = mysqli_fetch_array($check);  
$result = mysqli_num_rows($check);  
if ($result == 1) {  
    $_SESSION['login'] = true;  
    $_SESSION['id'] = $data['id'];  
    return true;  
} else {  
    return false;  
}  

}
public function session() {  
    if (isset($_SESSION['login'])) {  
        return $_SESSION['login'];  
    }  
}  

public function logout() {  
    $_SESSION['login'] = false;  
    session_destroy();  
}  
}  



?>