<?php include "conn_db.php" ?>

<?php
    
if($_SERVER['REQUEST_METHOD']  == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
}     

//post table in DB
$sql = "INSERT INTO `validated-form`(`Username`, `Email`, `Password`, `Confirm Password`) VALUES ('$username','$email','$password','$confirm_password')";

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
        <title>Form Validation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>

    <h1>Update records</h1>
        <div class="form-container">

        <form to="/form-validation/ass2_form.php" name="myForm" onsubmit="return validate_Form()"  method="post">

         <div class="form_input" id="username" >   
        <label for="username">Username</label>
        <input type="text" name="username" class="input_field" placeholder="Enter your username"   />
        <span class="form_error"></span>
        </div>

        <div class="form_input" id="email"> 
        <label for="email">Email</label>
        <input type="email" name="email" class="input_field" placeholder="Enter your email address" required  />
        <span class="form_error"></span>
        </div>

        <div class="form_input" id="password"> 
        <label for="passwrod">Password</label>
        <input type="password" name="password" class="input_field" placeholder="Enter your password" />
        <span class="form_error"></span>
        </div>


        <div class="form_input" id="confirm_password">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" class="input_field" placeholder="Confirm your password"  />
        <span class="form_error"></span>
        </div>

        <button class="submit_button" type="submit">Submit</button>

    </form>

</div>


        <script src="validation.js" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>
