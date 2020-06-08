<?php 
require_once ("dbConnect.php");
class Reservation
{
    function __construct() {
    }
    function addPassager($nom, $prenom, $age, $pays, $adresse, $tele, $email, $passeport){
        include 'dbConnect.php'; 
                               $req=$conn->query("SELECT * FROM passager where email='$email'");
                               $r=$req;
                               $row_cnt = $req->num_rows;
                               if(!$row_cnt){
                               $stmt = $conn->prepare("INSERT Into passager(nom, prenom, age, pays, adresse, tele, email, num_passport) values(?,?,?,?,?,?,?,?)");
                               $stmt->bind_param('ssissisi', $nom, $prenom, $age, $pays, $adresse, $tele, $email, $passeport);
                               $stmt->execute();
                               return $conn->insert_id;}
                               else{
                               $row=$r->fetch_assoc();
                               return $row['id'];
                               }
   
                           
                               }
    
    function addReservation($id,$user_id,$id_passager){
         include 'dbConnect.php';
                               $date = date('Y-m-d H:i:s');
                               $res = $conn->query("INSERT Into reservation(vol_id,passager_id,date_reservation,id_user) values('$id','$id_passager','$date','$user_id')");
                                return $conn->insert_id;
                                
								}
								
								

							
    
    function getReservationById($id) {
        include 'dbConnect.php';
        $query = "SELECT * FROM reservation where id=? ";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;

    }
    function getPassagerById($id) {
        include 'dbConnect.php';
        $query= "SELECT *  FROM passager where id='$id'";
        $stmt =$conn->prepare($query);
        $stmt->execute();
        $row= $stmt->get_result();
        return $row;
    }
    function getInfoReservationById($id) {
        include 'dbConnect.php';
        $stmt= $conn->query("SELECT R.id,R.date_reservation,R.vol_id,P.nom,P.prenom,P.age,P.pays from reservation as R,passager as P  where R.passager_id=P.id AND R.id=$id");
        return $stmt;
}
      
    function getAllReservation($id) {
        include 'dbConnect.php'; 
		$stmt= $conn->query("SELECT R.id,R.date_reservation,P.nom,P.prenom from reservation as R,passager as P  where R.passager_id=P.id AND R.id_user='$id'");
        return $stmt;
}

}
?>