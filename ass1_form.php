<?php

    //initalizing required connecting variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "formdata";
    //connecting php to db
    $conn = Mysqli_connect($server, $username, $password, $database );

    //if db is not connected
    if(!$conn){
        die("Sorry server connection failed ". mysqli_connect_error());
    } 


    if($_SERVER['REQUEST_METHOD']  == 'POST') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

    }     
    
    //post table in DB
    $sql = "INSERT INTO `form`(`Firstname`, `Lastname`, `Email`, `Phone no.`) VALUES ('$firstname','$lastname',' $email','$phone')";

    $result = mysqli_query($conn, $sql);


    if($result){
        echo "Congrats, data inserted successfully!";
    }


?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Input form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="ass1.css">
    </head>
    <body>

        <h2>Input form</h2>
        <div class="container">

        <form to="/ass1_form.php" method="post">

        <div class="mb-3">
    <label for="firstname" >Firstname</label>
    <input type="text" name="firstname" id="firstname" class="form-control" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="lastname" >Lastname</label>
    <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp">
  </div>

    <div class="mb-3">
    <label for="email" >Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" id="phone">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>     
        </div>

        <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>