<?php  
if(isset($_POST["details"]))  
{  $id=$_POST["details"];
include"ClassReservation.php";
include"Vol.php";
$r=new Reservation();
$v=new Vol();
     $result = $r->getInfoReservationById($id);  
     $row = mysqli_fetch_array($result);
     $vol=$v->getVolById($row["vol_id"]);
     $row2 = mysqli_fetch_array($vol);

     $output='';
     $output .= '  
     <div class="table-responsive">  
          <table class="table table-bordered">';  
     
          $output .= '  
               <tr>  
                    <td width="30%"><label>Nom</label></td>  
                    <td width="70%">'.$row["nom"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label>Prenom</label></td>  
                    <td width="70%">'.$row["prenom"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label>Age</label></td>  
                    <td width="70%">'.$row["age"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label>Pays</label></td>  
                    <td width="70%">'.$row["pays"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label>Ville de départ</label></td>  
                    <td width="70%">'.$row2["depart"].' </td>  
               </tr>  
               <tr>  
               <td width="30%"><label>Ville d arrivée</label></td>  
               <td width="70%">'.$row2["destination"].' </td>  
          </tr>  
          <tr>  
          <td width="30%"><label>Date de départ</label></td>  
          <td width="70%">'.$row2["date_depart"].' </td>  
     </tr>  
     <tr>  
     <td width="30%"><label>Prix</label></td>  
     <td width="70%">'.$row2["prix"].' </td>  
</tr>  
               ';  
     
     $output .= "</table></div>";  
     echo $output;  
}  
?>

