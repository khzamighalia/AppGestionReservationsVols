<?php
session_start();
if(!$_SESSION['login']) 
header("Location: login.php");
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
<?php include"menu.php" ?>


	<h1> Recherche des vols</h1>
<section class="s1">
	<!-- Default form subscription -->
	<form class="text-center border border-light p-5" method="post" action="recherche.php">
		<!-- Name -->
		<label for="exampleInputEmail1">Ville de départ</label>
		<input type="text" name="villedepart" class="form-control mb-4">

		<!-- Email -->
		<label for="exampleInputPassword1">Ville d arrivée</label>
		<input type="text" name="villearrivee" class="form-control mb-4">

		<!-- Sign in button -->
		<button class="btn btn-info btn-block" type="submit" name="submit-search">Chercher les vols</button>
		


	</form>

	 



	</section>
<?php include"footer.php" ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>