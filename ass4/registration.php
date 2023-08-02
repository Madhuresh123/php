<?php 
//connectiong to database
include "conn.php";  

include "insertreg.php";

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
        
        <h1>Registeration Page</h1>

        <div class="registration_container">

        <form action="" method="post">

            <div class="mb-3">
              <label for="regName" class="form-label">Name</label>
              <input type="text" name="regName" class="form-control" id="regName" >
            </div>

            <div class="mb-3">
                <label for="regEmail" class="form-label">Email address</label>
                <input type="email" name="regEmail" class="form-control" id="regEmail" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="regEducation" class="form-label">Education</label>
                <input type="text"  name="regEducation" class="form-control" id="regEducation" >
              </div>

              <div class="mb-3">
                <label for="regAddress" class="form-label">Address</label>
                <input type="text"  name="regAddress" class="form-control" id="regAddress">
              </div>

            <div class="mb-3">
              <label for="regPassword" class="form-label">Password</label>
              <input type="password"  name="regPassword" class="form-control" id="regPassword">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>

          </div>
        

       
          <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    </body>
</html>