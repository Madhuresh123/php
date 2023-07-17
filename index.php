<?php

    echo "We are connecting to the server <br>";

    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = Mysqli_connect($server, $username, $password);

    if(!$conn){
        echo "Sorry server connection failed";
    }
    else{
        echo "Connected Successfully";
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

