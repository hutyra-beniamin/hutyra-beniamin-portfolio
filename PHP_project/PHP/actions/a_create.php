
<?php 
ob_start();
session_start();


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
require_once '../dbconnect.php';

if ($_POST) {
    $animal_name = $_POST['animal_name'];
    $animal_age = $_POST['animal_age'];
    $desc = $_POST['desc'];
    $hobbies = $_POST['hobbies'];
    $animal_species = $_POST['animal_species'];
    $image = $_POST['image'];
    $type = $_POST['type'];
   $zipcode = $_POST['zipcode'];
   $city = $_POST['city'];
   $address = $_POST['address'];
    
   

 

   $sql= "INSERT INTO animals (`animal_name`, animal_age, `desc`, hobbies, `animal_species`, `image`, `type`, zipcode, city, `address`) VALUES ('$animal_name', '$animal_age', '$desc', '$hobbies', '$animal_species', '$image', '$type',  '$zipcode', '$city', '$address')";
    if($conn->query($sql) === TRUE) {
       echo "<h1>New Record Successfully Created</h1>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../admin.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
}

?>