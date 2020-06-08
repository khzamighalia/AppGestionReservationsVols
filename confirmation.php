<?php include"confirmation-back.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php
include('menu.php');
?>
	<h1> TICKET</h1>
    <div class="container">
                    <section class="s1 confirmation">
	<!-- Default form subscription -->
	<form class="border border-light" method="post" action="recherche.php">
        <!-- Name -->
        <h3 class="text-center text-danger">Ticket N° : <?= $row2['id']; ?></h3>
        <h4 class="text-info"> Informations du passager:</h4>
        <div class="row">
          <div class="col-md-6">
		<label for="exampleInputEmail1">Nom </label>
        <input type="text" class="form-control" value="<?= $row2['nom']; ?>" disabled>
</div>
<div class="col-md-6">
		<label for="exampleInputPassword1">Prenom</label>
        <input type="text" class="form-control" value="<?= $row2['prenom']; ?>" disabled>
</div>
</div>
<div class="row">
          <div class="col-md-6">
		<label for="exampleInputEmail1">Age</label>
        <input type="text" class="form-control" value="<?= $row2['age']; ?>" disabled>
</div>
<div class="col-md-6">
		<label for="exampleInputPassword1">Pays</label>
        <input type="text" class="form-control" value="<?= $row2['pays']; ?>" disabled>
</div>
</div>
<h4 class="text-info"> Informations du vol:</h4>
<div class="row">
          <div class="col-md-6">
		<label for="exampleInputEmail1">Ville de départ </label>
        <input type="text" class="form-control" value="<?= $row1['depart']; ?>" disabled>
</div>
<div class="col-md-6">
		<label for="exampleInputPassword1">Ville de destination</label>
        <input type="text" class="form-control" value="<?= $row1['destination']; ?>" disabled>
</div>
</div>
<div class="row">
          <div class="col-md-6">
		<label for="exampleInputEmail1"> Date de départ </label>
        <input type="text" class="form-control" value="<?= $row1['date_depart']; ?>" disabled>
</div>
<div class="col-md-6">
		<label for="exampleInputPassword1">Prix</label>
        <input type="text" class="form-control" value="<?= $row1['prix']; ?>" disabled>
</div>
</div>

	</form>

	 



	</section>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Etes vous sûr ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn"><a href="index.php">Confirm </a></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="blink" style="margin-top: 200px;"></div>



<?php include"footer.php"
?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>