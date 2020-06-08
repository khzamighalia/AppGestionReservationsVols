<?php  

session_start(); 
 if(isset($_POST['log']) AND isset($_POST['emailid']) AND isset($_POST['password'])){
 //if($_SERVER["REQUEST_METHOD"] == "POST"){  
    include_once('dbFunction.php');  
    $funObj = new dbFunction();  
        $emailid = $_POST['emailid'];  
        $password = $_POST['password'];  
		$user = $funObj->Login($emailid, $password);  
        if ($user) {
			if($_SESSION["statut"]=='user') 
			   
            // Registration Success  
		   header("location:index.php"); 
		   else header("location:dashbord.php");
		
        } else {  
            // Registration Failed  
            echo "<script>alert('Emailid / Password Not Match')</script>";  
        }  
    }  
?>  