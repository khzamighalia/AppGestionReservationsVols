<?php
session_start();
if(!$_SESSION['login']) 
header("Location: login.php");
if (isset($_POST['addflight'])) {
    require_once ("vol.php");
            $depart = $_POST['depart'];
            $destination = $_POST['destination'];
            $date_depart = $_POST['date_depart'];
            $num_place = $_POST['num_place'];
            $prix = $_POST['prix'];        
            $vol = new Vol();
            $insertId = $vol->addVol($depart, $destination,$date_depart,$num_place,$prix);
            if (empty($insertId)) {
                $response = array(
                    "message" => "Problem in Adding New Record",
                    "type" => "error"
                );
            } else {
                header("Location: dashbord.php");
            }
        }
        ?>