<?php
    //SELECT * FROM `notes`

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "notes";
    $popup = false;


    $conn = Mysqli_connect($server , $username, $password, $database);

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
        <link rel="stylesheet" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php 
    //post method

    if($_SERVER['REQUEST_METHOD']  == 'POST') {
        $title = $_POST['title'];
        $description = $_POST['description'];
    }

    $sql_post = "INSERT INTO `notes`(`Title`, `Description`) VALUES ( '$title' , '$description' )";
    $post_data = mysqli_query($conn, $sql_post);


    if($post_data){
        $popup = true;
    }
    else{
        echo "not insertes";
    }
?>


<?php
    if($popup){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your data inserted successfully.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
    }
?>

    <div class="Notes" style= "margin: 2rem 10rem;" "width:20rem; ">
    <h2>Notes</h2>


    <form to="/php-website/notes.php" method="post">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" placeholder="Write note's description" id="description" name="description"></textarea>

  </div>
  <button type="submit" class="btn btn-primary">Add Notes</button>
</form>
</div>


<div class="Data_table" style= "margin: 2rem 10rem;" "width:20rem;">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
  <?php 

//get method

$sql_get = "SELECT * FROM `notes`";
$get_data = mysqli_query($conn, $sql_get);

while($row = mysqli_fetch_assoc($get_data) ){
    // echo var_dump($row);
    echo "<tr>
    <th scope='row'>" .$row['Sno.'] ."</th>
    <td>" .$row['Title'] ." </td>
    <td>" . $row['Description']. "</td>
    <td>@Action</td>
  </tr>";
    // echo "Title is  " . $row['Title'] .  " Description is " . $row['Description'];
    // echo "<br>";
    
}
?>
  </tbody>
</table>
</div>

        <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    </body>
</html>