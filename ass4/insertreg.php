<?php

        //inserting data in table
if($_SERVER['REQUEST_METHOD']  == 'POST') {

    $regName = $_POST['regName'];
    $regEmail = $_POST['regEmail'];
    $regEducation = $_POST['regEducation'];
    $regAddress = $_POST['regAddress'];
    $regPassword = $_POST['regPassword'];

                //post table in DB
$sql = "INSERT INTO `profiledata`(`Name`, `Email`, `Education`, `Address`, `Password`) VALUES ('$regName','$regEmail','$regEducation','$regAddress','$regPassword');";

$result = mysqli_query($conn, $sql);

if($result){
    header("Location: login.php");
}

}   


?>