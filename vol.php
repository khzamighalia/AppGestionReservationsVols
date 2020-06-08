<?php 
require_once ("dbConnect.php");
class Vol
{
    function __construct() {
    }
    
    function addVol($depart,$destination,$date_depart,$num_place,$prix){
         include 'dbConnect.php'; 
        $stmt = $conn->prepare("INSERT INTO vols(depart,destination,date_depart,num_place,prix) VALUES (?, ?, ?, ?,?)");
        var_dump($stmt);
		$stmt->bind_param('sssii', $depart,$destination,$date_depart,$num_place,$prix);
		$stmt->execute();
        return $stmt;
    }
    
     
    function getVolById($id) {
        include 'dbConnect.php'; 
    						$query = "SELECT * FROM vols WHERE id='$id'";
								$stmt = $conn->prepare($query);
								$stmt->execute();
                                $result = $stmt->get_result();
                                return $result;					
    }
    
    function getAllvols() {
        include 'dbConnect.php'; 
		$stmt= $conn->query("SELECT * from vols");
        return $stmt;
}
function Recherche($depart,$destination) {
    include 'dbConnect.php'; 
    $query = "SELECT * from vols where depart='$depart' AND destination='$destination' AND num_place > 0 AND statut='1'";
				$stmt = $conn->prepare($query);
				$stmt->execute();
                $result = $stmt->get_result();
                return $result;
}
function ChangerStatut($id) {
    include 'dbConnect.php'; 
    $query = "SELECT * FROM vols WHERE id='$id'";
								$stmt = $conn->prepare($query);
								$stmt->execute();
                                $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if($row['statut']=='1')
    {
        $conn->query("UPDATE vols SET statut = '0' WHERE id='$id'");
    }
    else
    {  $conn->query("UPDATE vols SET statut = '1' WHERE id='$id'");
    }
}
function AfficherStatut($id) {
    include 'dbConnect.php'; 
    $query = "SELECT * FROM vols WHERE id='$id'";
								$stmt = $conn->prepare($query);
								$stmt->execute();
                                $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if($row['statut'])
    echo "activé";
    else
    echo "annulé";
}

      

}
?>