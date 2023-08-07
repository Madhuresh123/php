<?php
include "./includes/conn.php";

// Inserting data in table
class Login extends Conn {
    private $logEmail;
    private $logPassword;
    private $secretCode;

    public function __construct() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
            $this->logEmail = $_POST['logEmail'];
            $this->logPassword = $_POST['logPassword'];
            $this->secretCode = md5($this->logPassword);
        }
    }

    // Get user data from the table in the database
    public function getUser() {
        $sql = "SELECT * FROM profiledata WHERE Email= ? AND Password = ?";
        $stmt = $this->conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ss", $this->logEmail, $this->secretCode);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result) {
                $num = $result->num_rows;

                if ($num == 1) {
                    session_start();
                    $row = $result->fetch_assoc();
                    $_SESSION['id'] = $row['Sno.'];

                    header("location: profile.php");
                } else {
                    echo "Error: Invalid email or password";
                }
            } else {
                echo "SQL Error: " . $this->conn->error;
            }
            $stmt->close();
        } else {
            echo "SQL Error: " . $this->conn->error;
        }
    }
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
        <link rel="stylesheet" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    </head>
    <style>

        .registeration_container{
            margin: auto;
            width: 50%;
            border: 1px solid gray;
            border-radius: 10px;
            padding: 1rem;
        }

    </style>

    <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="registration.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
        
        <h1>Login Page</h1>

        <div class="registeration_container">
            
        <form method="post">

            <div class="mb-3">
                <label for="logEmail" class="form-label">Email address</label>
                <input type="email" name="logEmail" class="form-control" id="logEmail" aria-describedby="emailHelp">
              </div>

            <div class="mb-3">
              <label for="logPassword" class="form-label">Password</label>
              <input type="password"  name="logPassword" class="form-control" id="logPassword">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>

          </div>
        
        <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    </body>
</html>