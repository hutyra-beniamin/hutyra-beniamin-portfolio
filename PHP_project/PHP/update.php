<?php 

require_once 'dbconnect.php';

if ($_POST['animal_id']) {
   $animal_id = $_POST['animal_id'];

   $sql = "SELECT * FROM animals WHERE animal_id={$animal_id}";

   $result = $conn->query($sql);

   $data = $result->fetch_assoc();

   $conn->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Update</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
   <div class="container-fluid bg-success text-white p-4">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center mt-3 bg-dark p-4 rounded">
                <h1 class="mb-4 text-center">UPDATE!</h1>
                <form action="actions/a_update.php" method="POST">
                    <div class="row">
                        <div class="form-group col">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="animal_name" value="<?php echo $data['animal_name'] ?>">
                          
                        </div>
                        <div class="form-group col">    
                            <label for="age">Age</label>
                            <input type="text" class="form-control" id="age" name="animal_age" value="<?php echo $data['animal_age'] ?>">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="animal_species">Animal Species</label>
                            <input type="text" class="form-control"  name="animal_species" value="<?php echo $data['animal_species'] ?>">
                           
                        </div>
                        <div class="form-group col">
                            <label for="hobbies">Hobby</label>
                            <input type="hobbies" class="form-control" id="hobby" name="hobbies" value="<?php echo $data['hobbies'] ?>">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="image">Image</label>
                            <input type="text" class="form-control" id="image" name="image" value="<?php echo $data['image'] ?>">
                        </div>
                        <div class="form-group col">
                            <label for="zipcode">Zip Code</label>
                            <input type="text" class="form-control" id="zipcode" name="zipcode" value="<?php echo $data['zipcode'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="<?php echo $data['city'] ?>">
                        </div>
                        <div class="form-group col">
                            <label for="address">Street</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $data['address'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="type">Type</label><br>
                            <input type="radio" id="small" name="type" value="small">
                            <label for="small">Small</label><br>
                            <input type="radio" id="large" name="type" value="large">
                            <label for="large">Large</label><br>
                            
                        </div>
                        <div class="form-group col">
                            <label for="desc">Description</label>
                            <input type="text" class="form-control"  name="desc" value="<?php echo $data['desc'] ?>">
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <input type= "hidden" name= "animal_id" value= "<?php echo $data['animal_id']?>" />
                        <button class="btn bg-success text-white text-center"  type= "submit">Save Changes</button >
                        <a href= "admin.php"><button class="btn bg-success text-white w-100 mt-3 text-center" type="button" >Back</button ></a>
                    </div>
                    </div>
                   
                    
                </form >
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body >
</html >

<?php
}
?>