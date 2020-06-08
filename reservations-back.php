<?php
session_start(); 
if(!$_SESSION['login']) 
header("Location: login.php");
	require_once("ClassReservation.php");
	include"select.php";
	$id_user=$_SESSION['id'];
            $resv = new Reservation();
			$result = $resv->getAllReservation($id_user);  

        ?>

