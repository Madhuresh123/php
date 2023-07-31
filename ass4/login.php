<?php

    include "conn.php";  

        //inserting data in table
if($_SERVER['REQUEST_METHOD']  == 'POST'  && !empty($_POST)) {

    $logEmail = $_POST['logEmail'];
    $logPassword = $_POST['logPassword'];

                //post table in DB
$sql = "SELECT * FROM profiledata WHERE Email= '$logEmail' AND Password = '$logPassword'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);    

if ($result) {
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        session_start();
        $_SESSION['id'] = $row['Sno.'];

        header("location: profile.php");

    } else {
        echo "error";
    }
} else {
    echo "SQL Error: " . mysqli_error($conn);
}

}


?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    </head>
    <style>

        .registeration_container{
            margin: auto;
            width: 50%;
            border: 1px solid gray;
            border-radius: 10px;
            padding: 1rem;
        }

    </style>
    <body>
        
        <h1>Login Page</h1>

        <div class="registeration_container">
            
        <form method="post">

            <div class="mb-3">
                <label for="logEmail" class="form-label">Email address</label>
                <input type="email" name="logEmail" class="form-control" id="logEmail" aria-describedby="emailHelp">
              </div>

            <div class="mb-3">
              <label for="logPassword" class="form-label">Password</label>
              <input type="password"  name="logPassword" class="form-control" id="logPassword">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>

          </div>
        
        <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    </body>
</html>