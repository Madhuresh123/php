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
    public function __destruct() {

        try {
            $sql = "INSERT INTO `profiledata`(`Name`, `Email`, `Education`, `Address`, `Password`) VALUES (:name, :email, :education, :address, :password)";
            $stmt = $this->connectingDB()->prepare($sql);
            $stmt->bindParam(':name', $this->regName);
            $stmt->bindParam(':email', $this->regEmail);
            $stmt->bindParam(':education', $this->regEducation);
            $stmt->bindParam(':address', $this->regAddress);
            $stmt->bindParam(':password', $this->secretCode);
            $stmt->execute();
            $stmt->closeCursor();
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}

?>
