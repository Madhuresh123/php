<?php

    class Conn{

    //initalizing required connecting variables
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "formdata";
    private $conn; 

        public function connectingDB(){  

            //connecting php to db
        $conn = Mysqli_connect($this->server, $this->username, $this->password, $this->database );

        //if db is not connected
        if(!$conn){
            die("Sorry server connection failed ". mysqli_connect_error());
        }else{

            $this->conn = $conn;
            return $conn;
        }

        }
   
    }
?>