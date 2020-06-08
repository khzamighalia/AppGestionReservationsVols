<?php 
require_once ("dbConnect.php");
class Passager
{
    function __construct() {
    }
    
    function addPassager($nom, $prenom, $age, $pays, $adresse, $tele, $email, $passeport){
         include 'dbConnect.php'; 
								$stmt = $conn->prepare("INSERT Into passager(nom, prenom, age, pays, adresse, tele, email, num_passport) values(?,?,?,?,?,?,?,?)");
								$stmt->bind_param('ssissisi', $nom, $prenom, $age, $pays, $adresse, $tele, $email, $passeport);
                                $stmt->execute();
                                return $conn->insert_id;
    
                            
								}
								
								

							
    
    function getPassagerById($id) {
        include 'dbConnect.php';
        $query= "SELECT *  FROM passager where id='$id'";
        $stmt =$conn->prepare($query);
        $stmt->execute();
        $row= $stmt->get_result();
        return $row;
    }
    
   
}
?>