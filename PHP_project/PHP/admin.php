<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
// echo $_SESSION['admin'] ;
 header("Location: index.php");
 exit;
}
if(isset($_SESSION["user"])){
    header("Location: home.php");
    exit;
}
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM user WHERE userId=".$_SESSION['admin']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);


$resCar = mysqli_query($conn, "SELECT * FROM animals");

?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['userEmail' ]; ?></title>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">



</head>

<body >
<div class="conatiner-fluid" style="background-image:url(img/Taieri.png); width: 100%; height: 50vw;">
           Hi <?php echo $userRow['userEmail' ]; ?>
		   <br>
		   <br>
           
           <a  href="logout.php?logout" class="btn btn-primary">Sign Out</a>
		   <br>
		   <br>
		   <a href="create.php" class="btn btn-primary">Add Animal</a>
		   <br>
		   <br>
		   <hr>


           <?php
           if($resCar->num_rows == 0 ){
			echo "No result";
		}elseif($resCar->num_rows == 1){
			$row = $resCar->fetch_assoc();
			echo '
			<table class="table table-striped table-light text-dark">
			<thead>
			  <tr>
				<th scope="col">Img</th>
				<th scope="col">Name</th>
				<th scope="col">Age</th>
				<th scope="col">Description</th>
				<th scope="col">Type</th>
			  <th scope="col">Hobby</th>
			  <th scope="col">Species</th>
				<th scope="col">City</th>
				<th scope="col">Zipcode</th>
				<th scope="col">Address</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<th scope="row"><img class="card-img-top" src="'.$row["image"].'" style="width:15vw; height:10vw;"></th>
				<td>'.$row["animal_name"].'</td>
				<td>'.$row["animal_age"].'</td>
				<td>'.$row["desc"].'</td>
				<td>'.$row["type"].'</td>
				<td>'.$row["hobbies"].'</td>
				<td>'.$row["animal_species"].'</td>
				<td>'.$row["city"].'</td>
				<td>'.$row["zipcode"].'</td>
				<td>'.$row["address"].'</td>
				
				<td>
					<form action ="actions/delete.php" class="w-50 text-center" method="post">
						<input type="hidden" name= "animal_id" value="' . $row["animal_id"] . '" />
						<button type="submit" class="btn btn-outline-danger text-white">DELETE</button>
					</form>
				</td>
				<td>
					<form action ="update.php" class="w-50 text-center" method="post">
						<input type="hidden" name= "animal_id" value="' . $row["animal_id"] . '" />
						<button type="submit" class="btn btn-outline-success text-white">UPDATE</button>
					</form>	
				</td>		
				
			  </tr>
			  
			</tbody>
			</table>
			';
		}else {
			$rows = $resCar->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $row) {
				echo '
			<table class="table table-striped table-light text-dark">
			<thead>
			  <tr>
				<th scope="col">Img</th>
				<th scope="col">Name</th>
				<th scope="col">Age</th>
				<th scope="col">Description</th>
				<th scope="col">Type</th>
			  <th scope="col">Hobby</th>
			  <th scope="col">Species</th>
				<th scope="col">City</th>
				<th scope="col">Zipcode</th>
				<th scope="col">Address</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<th scope="row"><img class="card-img-top" src="'.$row["image"].'" style="width:15vw; height:10vw;"></th>
				<td>'.$row["animal_name"].'</td>
				<td>'.$row["animal_age"].'</td>
				<td>'.$row["desc"].'</td>
				<td>'.$row["type"].'</td>
				<td>'.$row["hobbies"].'</td>
				<td>'.$row["animal_species"].'</td>
				<td>'.$row["city"].'</td>
				<td>'.$row["zipcode"].'</td>
				<td>'.$row["address"].'</td>
				
				<td>
					<form action ="actions/delete.php" class="w-50 text-center" method="post">
						<input type="hidden" name= "animal_id" value="' . $row["animal_id"] . '" />
						<button type="submit" class="btn btn-outline-danger text-dark">DELETE</button>
					</form>
				</td>
				<td>
					<form action ="update.php" class="w-50 text-center" method="post">
						<input type="hidden" name= "animal_id" value="' . $row["animal_id"] . '" />
						<button type="submit" class="btn btn-outline-success text-dark">UPDATE</button>
					</form>	
				</td>		
				
			  </tr>
			  
			</tbody>
			</table>
			';
			}
		}

 		?>
		
    
</div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
</body>
</html>
<?php ob_end_flush(); ?>