<?php 

require_once '../dbconnect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<?php 

if ($_POST) {
    $name = $_POST['animal_name'];
    $age = $_POST['animal_age'];
    $description = $_POST['desc'];
    $hobby = $_POST['hobbies'];
    $type = $_POST['animal_species'];
    $img = $_POST['image'];
    $status = $_POST['type'];
   $code = $_POST['zipcode'];
   $city = $_POST['city'];
   $street = $_POST['address'];
    
   $animal_id = $_POST['animal_id'];

 

$sql = "UPDATE animals
SET `animal_name`='$name', animal_age='$age', `desc`='$description', hobbies='$hobby', `animal_species`='$type', `image`='$img', `type`='$status', zipcode='$code', city='$city', `address`='$street' WHERE animal_id={$animal_id}";


   if($conn->query($sql) === TRUE) {
       echo '
       <div class="container-fluid text-center p-5">
       <h1 class="text-dark p-5 m-5">Successfully updated!!</h1>
       <a href="../admin.php"><button class="btn bg-primary text-white m-5 p-2 w-25" type="button">Back</button></a>
       </div>
       ' ;
   } else {
        echo "Error while updating record : ". $conn->error;
   }

   $conn->close();

}

?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>