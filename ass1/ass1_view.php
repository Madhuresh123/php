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

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="ass1.css">
    </head>
    <body>
        
    <table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Phone no.</th>

  </tr>

<?php

     //creating table in DB
     $sql = "SELECT * FROM `form`";

     $result = mysqli_query($conn, $sql);
 
     // find numbers of records returned
     // $num_rows = mysqli_num_rows($result);
 
         while($row = mysqli_fetch_assoc($result) ){
             // echo var_dump($row);
            // echo var_dump($row);
    echo "
    
  <tr>
    <td>{$row['Firstname']}</td>
    <td>{$row['Lastname']}</td>
    <td>{$row['Email']}</td>
    <td>{$row['Phone no.']}</td>
  </tr>
    ";
         }

?>

</table>

        
        <script src="" async defer></script>
    </body>
</html>