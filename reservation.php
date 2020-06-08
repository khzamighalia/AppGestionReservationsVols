<?php
// include 'reservation-back.php';
include('dbconnection.php');


?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sky flight</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">



	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">





</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">SKY FLIGHT</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Planifier</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Mes réservations
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">S’inscrire</a>
						<a class="dropdown-item" href="#">Se connecter</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Faq</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Chercher" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
			</form>
		</div>
	</nav>



	<div class="flex">
		<section class="t">
			<div class="container py-3">
				<div class="card">
					<div class="row ">
						<div class="col-md-4">
							<img class="plane" src="img/580b585b2edbce24c47b2d14.png" class="w-100">
						</div>
						<div class="col-md-8 px-3">
							<div class="card-block px-3">


								<?php
								$id = $_GET['id'];
								$query = "SELECT * FROM vols WHERE id=?";
								$stmt = $conn->prepare($query);
								$stmt->bind_param("i", $id);
								$stmt->execute();
								$result = $stmt->get_result();
								$row = $result->fetch_assoc();
								?>
								<h4 class="card-title">Depart :<span style="color:blue"><?= $row['depart']; ?></span></h4>
								<h4 class="card-title">Destination : <span style="color:blue"><?= $row['destination']; ?></span></h4>
								<h4 class="card-title">Date depart :<span style="color:blue"><?= $row['date_depart']; ?>  </span> </h4>
								<h4 class="card-title">Nomber de places : <span style="color:blue"><?= $row['num_place'];; ?></span></h4>
								<h4 class="card-title">Prix : <span style="color:blue"><?= $row['prix']; ?> DH</span> </h4>

								<a href="index.php" class="btn btn-primary">Annuler le vol</a>
							</div>
						</div>

					</div>
				</div>
			</div>
	</div>
	</section>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form action="reservation-back.php" method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Nom</span>
											<input class="form-control" name="nom" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Prenom</span>
											<input class="form-control" name="prenom" type="text">
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
											<input class="form-control" name="pays" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Adresse </span>
											<input class="form-control" name="adresse" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Numéro de telephone </span>
											<input class="form-control" name="tele" type="number">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Email </span>
											<input class="form-control" name="email" type="email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Numéro de passeport </span>
											<input class="form-control" name="passeport" type="number">
										</div>
									</div>
									<input type="hidden" id="custId" name="id" value="<?= $id ;?>">
								</div>
								<div class="form-btn">



									<button type="submit" name="add" class="submit-btn">
									Réservation complète
										<!--  <a style="color: #fff;;text-decoration: none;" name="add" class="abtn" href="confirmation.php?pid=<?= $row['id']; ?>">Réservation complète</a> -->
									</button>




								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="card text-center">
        <div class="card-header">
            Fonctionnalités
        </div>
        <div class="card-body">
            <h5 class="card-title">© 2020 Sky flight </h5>
            <p class="card-text">Tous droits réservés </p>
            <a href="index.php" class="btn btn-primary">Retour à l'accueil</a>
        </div>
        <div class="card-footer text-muted">
            Il y a deux jours
        </div>
    </div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>