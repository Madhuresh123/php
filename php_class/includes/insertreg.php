<?php

class Insertreg extends Conn {

    private $regName;
    private $regEmail;
    private $regEducation;
    private $regAddress;
    private $regPassword;
    private $secretCode;

    public function __construct() {
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->regName = $_POST['regName'];
            $this->regEmail = $_POST['regEmail'];
            $this->regEducation = $_POST['regEducation'];
            $this->regAddress = $_POST['regAddress'];
            $this->regPassword = $_POST['regPassword'];
            $this->secretCode = md5($this->regPassword);
        }
    }

    // Method to post data to the table in the database
    public function post() {
        $sql = "INSERT INTO `profiledata`(`Name`, `Email`, `Education`, `Address`, `Password`) VALUES ('$this->regName','$this->regEmail','$this->regEducation','$this->regAddress','$this->secretCode');";

        $result = mysqli_query($this->connectingDB(), $sql);

        // if ($result) {
        //     header("Location: login.php");
        //     exit;
        // } else {
        //     die("Error: " . mysqli_error($this->conn));
        // }
    }

}

?>
