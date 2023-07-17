<?php

    //adding comment 
    echo "We are connecting to the server <br>";

    //initalizing required connecting variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "seconddb";
    //connecting php to db
    $conn = Mysqli_connect($server, $username, $password, $database );

    //if db is not connected
    if(!$conn){
        die("Sorry server connection failed ". mysqli_connect_error());
    }
    else{
        echo "Connected Successfully<br>";
    }   
    
    $name = "COD";
    $category = "Combate";
    $price = "89";

    //creating table in DB
    $insert = "INSERT INTO `games`(`Game name`, `category`, `price`) VALUES ( '$name' , '$category' , '$price' )";

    $result = mysqli_query($conn, $insert);


    if($result){
        echo "Congrats, data inserted successfully!";
    }
    else{
        echo "data do not inserted because of following error --->" . mysqli_error($conn);
    }

?>
