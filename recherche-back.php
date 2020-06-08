<?php
session_start(); 
if(!$_SESSION['login']) 
header("Location: login.php");
if (isset($_POST['submit-search'])) {
    require_once("vol.php");
            $depart = $_POST['villedepart'];
            $destination = $_POST['villearrivee'];
            $vol = new Vol();
			$result = $vol->Recherche($depart,$destination);
        }
        ?>