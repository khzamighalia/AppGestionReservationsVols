<?php
include"ajoutervol-back.php"
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
<?php include"menu-admin.php" ?>
<h1> Ajouter un vol</h1>
<!-- <div id="booking" class="section"> -->
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Depart</span>
											<input type="text" name='depart' id='depart' class="form-control" required >
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Destination</span>
											<input class="form-control" name="destination" id='destination' type="text" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Date depart</span>
											<input class="form-control" name="date_depart" id='date_depart' type="date" required>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Nombre de places</span>
											<input class="form-control" name="num_place" id='num_place' type="number" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Prix </span>
											<input class="form-control" name="prix" id='num_place' type="number" required>
										</div>
									</div>
									
								</div>
								<div class="form-btn">



									<button type="submit" name="addflight" id="addflight" class="submit-btn">
										Valider
									</button>




								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    <!-- </div> -->
    <?php include"footer.php" ?>
    </body>
    </html>



