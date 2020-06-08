<?php
   session_start();
    if(!$_SESSION['login']) 
    header("Location: login.php");
    require_once ("vol.php");   
            $vol = new Vol();
            $result = $vol->getAllvols();
    if(isset($_POST['switch'])){
      $id=$_POST['id'];
      $vol->ChangerStatut($id);
      header("Location:dashbord.php");
    }
        ?>