<?php
class Conn
{
    // Initializing required connecting variables
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "formdata";
    private $conn;

    public function connectingDB()
    {
        // Connecting PHP to DB using PDO
        try {
            $conn = new PDO("mysql:host=$this->server;dbname=$this->database;charset=utf8mb4", $this->username, $this->password);

            // Set error handling to throw exceptions on error
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // If you want to enable emulated prepared statements for better performance
            // (Only recommended if your database driver supports it and you fully trust your data)
            // $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            $this->conn = $conn;
        return $conn;
        } catch (PDOException $e) {
            // Handle any exceptions that occur during the connection process
            die("Sorry server connection failed: " . $e->getMessage());
        }
    }
}
?>
