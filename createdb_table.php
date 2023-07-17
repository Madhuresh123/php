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

    //creating table in DB
    $sql_table = "CREATE TABLE `games` (`Sr no.` INT(5) NOT NULL AUTO_INCREMENT , `Game name` VARCHAR(11) NOT NULL , `category` VARCHAR(11) NOT NULL , `price` INT(5) NOT NULL , PRIMARY KEY (`Sr no.`))";

    $result = mysqli_query($conn, $sql_table);


    if($result){
        echo "Congrats, Table created successfully!";
    }
    else{
        echo "Table is not created because of following error --->" . mysqli_error($conn);
    }

?>
