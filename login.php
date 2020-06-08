<?php  
include"login-back.php"  
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

<div class="form1">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 ">
						<div class="booking-form">
						<div class="row">
									<div class="col-md-12 sign">
									<h1> Connexion </h1>
										</div>
                        </div>
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Email</span>
											<input type="email" name="emailid" class="form-control" > 
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Mot de passe</span>
											<input type="password" name="password" class="form-control"  >
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button type="submit" name="log" class="submit-btn">
										Valider
									</button>
									<h5 class="hh5"><a href="register.php">Vous n'avez pas de compte? </a></h5>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>


