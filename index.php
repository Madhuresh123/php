<?php

    //adding comment 
    echo "We are connecting to the server <br>";

    //initalizing required connecting variables
    $server = "localhost";
    $username = "root";
    $password = "";

    //connecting php to db
    $conn = Mysqli_connect($server, $username, $password);

    //if db is not connected
    if(!$conn){
        die("Sorry server connection failed ". mysqli_connect_error());
    }
    else{
        echo "Connected Successfully<br>";
    }

    //creating db
    $sql = "CREATE DATABASE firstDB2";
    $result = mysqli_query($conn, $sql);

    //if db is connected
    if($result){
        echo "Congrats, Database created successfully!";
    }
    else{
        echo "Database is not created because of following error --->" . mysqli_error($conn);
    }

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>First php form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>This is the Login form</h1>
        <div class="container">
            <form action="" method="">
                Username: <input type="text" name="userName" />
                <br>
                <br>
                E-mail: <input type="email" name="email" />
                <br>
                <br>
                <button type="submite">Submit</button>
            </form>
        </div>
        <script src="" async defer></script>
    </body>
</html>

