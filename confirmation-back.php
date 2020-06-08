<?php
session_start(); 
$id=$_GET['id'];
include"vol.php";
include"ClassReservation.php";
include"Passager.php";
$R = new Reservation();
$V = new Vol();
$P = new Passager();
$rowr=$R->getReservationById($id);
$row = $rowr->fetch_assoc();
$vol=$row['vol_id'];
$rowvol=$V->getVolById($vol);
$row1 = $rowvol->fetch_assoc();
$passager=$row['passager_id'];
$rowp=$R->getPassagerById($passager);
$row2 = $rowp->fetch_assoc();
?>