<?php require_once 'dbconnect.php'; ?>
<!DOCTYPE html>
<html>
<head>
   <title>Insert</title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-success">
<body>
   <div class="container-fluid bg-success text-white p-4">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center mt-3 bg-dark p-4 rounded">
                <h1 class="mb-4 text-center">Add a new pet!</h1>
                <form action="actions/a_create.php" method="POST">
                    <div class="row">
                        <div class="form-group col">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="animal_name">
                          
                        </div>
                        <div class="form-group col">    
                            <label for="age">Age</label>
                            <input type="text" class="form-control" id="age" name="animal_age">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="desc">
                           
                        </div>
                        <div class="form-group col">
                            <label for="hobby">Hobby</label>
                            <input type="text" class="form-control" id="hobby" name="hobbies">
                            
                        </div>
                        <div class="form-group col">
                            <label for="animal_species">Species</label>
                            <input type="text" class="form-control" id="animal_species" name="animal_species">
                            
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col">
                            <label for="img">Image</label>
                            <input type="text" class="form-control" id="img" name="image">
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
                    </div>
                    <div class="form-group col">
                            <label for="animal_species">Zipcode</label>
                            <input type="text" class="form-control" id="zipcode" name="zipcode">
                            
                        </div>
                        <div class="form-group col">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city">
                            
                        </div>
                        <div class="form-group col">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                            
                        </div>
                    <div class="d-flex flex-column">
                        <button type="submit" value="Submit" name="submit" class="btn btn-success">Submit</button>
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
</body>
</html>
