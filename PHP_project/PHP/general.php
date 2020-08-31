<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user' ]) ) {
 header("Location: index.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM user WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);


$resCar = mysqli_query($conn, "SELECT * FROM animals WHERE animal_age < 8");

?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['userEmail' ]; ?></title>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">



</head>
<body>
<nav class="nav nav-justified align-items-center">
  <a class="nav-item nav-link text-dark" href="home.php">All Animals</a>
  <a class="nav-item nav-link text-dark" href="general.php">Children & Adults</a>
  <a class="nav-item nav-link text-dark" href="senior.php">Seniors</a> 
    <div class="row m-5 justify-content-center" id="result"></div>
    
</nav>
<div class="container-fluid" style="background-image:url(img/Taieri.png); width: 100%; height: 70vw;">	

           Hi <?php echo $userRow['userEmail' ]; ?>
           
           <a  href="logout.php?logout">Sign Out</a><br><hr>
		   <div class="row m-5 justify-content-evenly">
		   <?php 
  
  while ($row = mysqli_fetch_assoc($resCar)) {
  
	echo '
	
  <div class="card col-3 m-3 p-0 text-dark">
	  <img class="card-img-top" src="'.$row["image"].'" style="width:100%; height:15vw;">
	  <div class="card-body">
		<h5 class="card-title ">'.$row["animal_name"].'</h5>
		<p class="card-text">Age: '.$row["animal_age"].'</p>
		<p class="card-text">Description: '.$row["desc"].'</p>
		<p class="card-text">Type: '.$row["type"].'</p>
		<p class="card-text">Hobby: '.$row["hobbies"].'</p>
		<p class="card-text">City: '.$row["city"].'</p>
		<p class="card-text">Zip Code: '.$row["zipcode"].'</p>
		<p class="card-text">Street: '.$row["address"].'</p>
	  </div>
  </div>
	
	';
  }
  ?>
		 </div>
		
</div>
       		

 <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
<?php ob_end_flush(); ?>