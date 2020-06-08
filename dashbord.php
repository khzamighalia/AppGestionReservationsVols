<?php include"dashbord-back.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Toggle Switch</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin-top: -48px;        
    } 
</style> -->
 
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php include"menu-admin.php" ?>


	<h1> Liste des vols</h1>
    <p>
    <!-- Button trigger modal -->
<a href="ajoutervol.php"><button type="button" class="btn btn-primary b" data-toggle="modal" data-target="#exampleModalLong" >
  + Nouveau vol
</button></a>
</p>
<div class="container">
    <!-- Default form subscription -->
    
    <div class="table-responsive">
  <table class="table">
    <thead>
    <tr>
    <th> Depart </th>
    <th> Destination </th>
    <th> Date depart </th>
    <th> Places </th>
    <th> Prix </th>
    <th> Statut </th>
    <th> Action </th>
    </tr>
</thead>
<tbody>
    <?php 
    while ($row = $result->fetch_assoc()) { ?>
                               <tr>
								<td><?= $row['date_depart']; ?></td>
								<td><?= $row['depart']; ?></td>
								<td><?= $row['destination']; ?></td>
                                <td><?= $row['num_place']; ?></td>
                                <td><?= $row['prix']; ?></td>
                                <th><?= $vol->AfficherStatut($row['id']);?>  </th>
                                
                                <th>
                                <form action="<?php echo $_SERVER['PHP_SELF'];?>" 
                                method="POST">
                                <input type="hidden" id="vId" name="id" value="<?= $row['id'];?>">
                                <button type="submit" name="switch"> <img src="img/switch.png"> </button>
                                </form>
                                </th>
                        </tr>
                        <?php } ?>
                        </tbody>

  </table>
</div>
</div>
<?php include"footer.php" ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>