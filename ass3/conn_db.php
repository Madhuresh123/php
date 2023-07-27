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
?>


