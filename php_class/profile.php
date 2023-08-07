<?php

    include "./includes/conn.php";  
    session_start();

    class Profile extends Conn{

      private $editSno;
      private $editName;
      private $editEmail;
      private $editEducation;
      private $editAddress;
      private $editPassword;
      private $secretCode;

      
      public function __construct(){

        if (!isset($_SESSION['id'])) {
          header("location: login.php");
      }
      
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
          //update the record
          $this->editSno = $_SESSION['id'];
          $this->editName = $_POST["editName"];
          $this->editEmail = $_POST["editEmail"];
          $this->editEducation = $_POST["editEducation"];
          $this->editAddress = $_POST["editAddress"];
          $this->editPassword = $_POST["editPassword"];
          $this->secretCode = md5($this->editPassword);
  
    
          $sql = "UPDATE `profiledata` SET `Name` = '$this->editName', `Email` = '$this->editEmail', `Education` = '$this->editEducation', `Address` = '$this->editAddress', `Password` = '$this->secretCode' WHERE `profiledata`.`Sno.` = $this->editSno";
          $result =  mysqli_query($this->connectingDB(), $sql);
        
        }
        
      }
      
      // getting data from database

      public function getData(){

        $sql = "SELECT * FROM profiledata WHERE `Sno.` = '{$_SESSION['id']}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
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
        .profile_card{
            margin: 3rem;
        }
    </style>

    <body>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="/php-website/ass4/profile.php" method="post">

        <div class="modal-body">


                <div class="mb-3">
                  <label for="editName" class="form-label">Name</label>
                  <input type="text" name="editName" class="form-control" id="editName" >
                </div>
    
                <div class="mb-3">
                    <label for="editEmail" class="form-label">Email address</label>
                    <input type="email" name="editEmail" class="form-control" id="editEmail" aria-describedby="emailHelp">
                  </div>
    
                  <div class="mb-3">
                    <label for="editEducation" class="form-label">Education</label>
                    <input type="text"  name="editEducation" class="form-control" id="editEducation" >
                  </div>
    
                  <div class="mb-3">
                    <label for="editAddress" class="form-label">Address</label>
                    <input type="text"  name="editAddress" class="form-control" id="editAddress">
                  </div>
    
                <div class="mb-3">
                  <label for="editPassword" class="form-label">Password</label>
                  <input type="password"  name="editPassword" class="form-control" id="editPassword">
                </div>
    
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>

    </form>


      </div>
    </div>
  </div>


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

  <!-- Profile card -->
        
        <div class="profile_card"> 

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Profile</h5>
                  <p class="card-text"><?php echo $row['Name']; ?></p>
                  <p class="card-text"><?php echo $row['Email']; ?></p>
                  <p class="card-text"><?php echo $row['Education']; ?></p>
                  <p class="card-text"><?php echo $row['Address']; ?></p>

                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Edit
                  </button>
                  <button type="button" onclick="handleLogout()" class="btn btn-danger">Logout</button>

                </div>
              </div>

        </div>


        <script>
function handleLogout() {
    fetch('logout.php')
      .then(response => {
        // Check if the logout was successful
        if (response.ok) {
          // Redirect the user to the login page after successful logout
          window.location.href = 'login.php';
        } else {
          // Handle any errors if needed
          console.error('Logout failed.');
        }
      })
      .catch(error => {
        console.error('Error occurred during logout:', error);
      });
}
</script>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    </body>
</html>