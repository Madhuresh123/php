<?php

        if($_SERVER['REQUEST_METHOD']  == 'POST') {
            $gameName = $_POST['gameName'];
            $category = $_POST['category'];
            $price = $_POST['price'];
        }

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


        $name = $gameName;
        $category = $category;
        $price = $price;

            //creating table in DB
    $sql = "INSERT INTO `games`(`Game name`, `category`, `price`) VALUES ( '$name' , '$category' , '$price' )";

    $result = mysqli_query($conn, $sql);


    if($result){
        echo "Congrats, data inserted successfully!";
        echo "Game name= $gameName, Category = $category, Price = $price";

    }
    else{
        echo "data do not inserted because of following error --->" . mysqli_error($conn);
    }

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
            <form action="/php-website/from.php" method="post">
                Game name: <input type="text" name="gameName" />
                <br>
                <br>
                Category: <input type="text" name="category" />
                <br>
                <br>
                Price: <input type="text" name="price" />
                <br>
                <br>
                <button type="submite">Submit</button>
            </form>
        </div>
        <script src="" async defer></script>
    </body>
</html>