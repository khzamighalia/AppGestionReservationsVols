<?php
session_start(); 
include"vol.php";
include"ClassReservation.php";
$vol=new Vol();
$reservation=new Reservation();
$user=$_SESSION['id'];
$id=$_GET['id'];
$result=$vol->getVolById($id);
$row = $result->fetch_assoc();

  if(isset($_POST['add'])){
	
	                            $nom = $_POST['nom'];
								$prenom = $_POST['prenom'];
								$age = $_POST['age'];
								$pays = $_POST['pays'];
								$adresse = $_POST['adresse'];
								$tele = $_POST['tele'];
								$email = $_POST['email'];
								$passeport = $_POST['passeport'];
								$id=$_POST['id'];
								$last_id=$reservation->addPassager($nom, $prenom, $age, $pays, $adresse, $tele, $email, $passeport);
								$last_id_res=$reservation->addReservation($id,$user,$last_id);
	  header("Location: confirmation.php?id=$last_id_res");
	 
	 
  }
								
?>
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


<h1>Reservation</h1>
	<div class="flex">
		<section class="t">
			<div class="container py-3">
				<div class="card">
					<div class="row ">
						<div class="col-md-4">
							<img class="plane" src="img/580b585b2edbce24c47b2d14.png" class="w-100">
						</div>
						<div class="col-md-8 px-3">
							<div class="card-block cc px-3">

								<h4 class="card-title">Depart :<span style="color:blue"><?= $row['depart']; ?></span></h4>
								<h4 class="card-title">Destination : <span style="color:blue"><?= $row['destination']; ?></span></h4>
								<h4 class="card-title">Date depart :<span style="color:blue"><?= $row['date_depart']; ?> </span> </h4>
								<h4 class="card-title">Nomber de places : <span style="color:blue"><?= $row['num_place']; ?></span></h4>
								<h4 class="card-title">Prix : <span style="color:blue"><?= $row['prix'];  ?> DH</span> </h4>

								<a href="index.php" class="btn btn-primary">Annuler le vol</a>
							</div>
						</div>

					</div>
				</div>
			</div>
	</div>
	</section>
	<div>
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Nom</span>
											<input class="form-control" name="nom" type="text" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Prenom</span>
											<input class="form-control" name="prenom" type="text" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Age</span>
											<input class="form-control" name="age" type="number" required>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Pays </span>
											<input class="form-control" name="pays" type="text" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Adresse </span>
											<input class="form-control" name="adresse" type="text" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Numéro de telephone </span>
											<input class="form-control" name="tele" type="number" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Email </span>
											<input class="form-control" name="email" type="email" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Numéro de passeport </span>
											<input class="form-control" name="passeport" type="number" required>
										</div>
									</div>
									<input type="hidden" id="custId" name="id" value="<?= $_GET['id'];?>">
		
								</div>
								<div class="form-btn">
									<button type="submit" class="s22" name="add">Valider</button>

								
																
								




								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<?php
	 include"footer.php"
	?>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>