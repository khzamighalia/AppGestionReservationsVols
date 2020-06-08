<?php
include"reservations-back.php";
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    
 
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php include"menu.php" ?>
	<div class="container text-center">
		<form method="post" action="recherche">
			<h1>Historique des réservations</h1>

	<div class="container">
	<div class="table-responsive">
	<table class="table">
	<?php 
	 $row_cnt = $result->num_rows; 
	 if($row_cnt <= 0)
	  echo "<h3 class='text-danger'>Aucun résultat trouvé <h3>";
	  else {
	   	  echo"<thead>
		  <tr>
		  <th> N° </th>
		  <th> Date </th>
		  <th> Nom </th>
		  <th> Prenom </th>
		  <th> Action </th>
		  </tr>
	  </thead>
	  <tbody>";
	  while($row = $result->fetch_assoc()) {
							echo "<tr>
								  <td> ".$row['id']."</td>
								  <td> ".$row['date_reservation']." </td>
								  <td> ".$row['nom']." </td>
								  <td> ".$row['prenom']."</td>
								  <th>
								  
								  <td><input type='button' name='view' value='view' id='".$row["id"]."' class='btn btn-info  view_data' /></td>  
                          
				  </td>
						  </tr>";
						   } 
						   echo "</tbody>";}
						   ?>
	
	 
	  					  
  
	</table> 
	</div>
  </div>	
  </form>	
	</div>
	<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Détails de la réservation</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
	<?php include"footer.php" ?>

	
	<script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var details = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{details:details},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
 	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js">

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      

	
</body>

</html>