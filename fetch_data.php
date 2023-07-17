<?php
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
    $sql = "SELECT * FROM `games`";

    $result = mysqli_query($conn, $sql);

    // // find numbers of records returned
    // $num_rows = mysqli_num_rows($result);

    // // echo $num_rows;

    //     $row = mysqli_fetch_assoc($result);
    //     // echo var_dump($row);

        while($row = mysqli_fetch_assoc($result) ){
            // echo var_dump($row);
            echo "Name of the game is  " . $row['Game name'] .  " It belongs to " . $row['category'] . " and its price is ". $row['price'] ;
            echo "<br>";
        }
?>