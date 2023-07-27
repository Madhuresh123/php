<?php include "conn_db.php" ?>

<?php 

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

      //update the record
      $editSno = $_POST["editSno"];
      $Editusername = $_POST["editUsername"];
      $editEmail = $_POST["editEmail"];
      $editPassword = $_POST["editPassword"];
      $editConfirmPassword = $_POST["editConfirmPassword"];

      $sql = "UPDATE `validated-form` SET `Username` = '$Editusername', `Email` = '$editEmail', `Password` = '$editPassword', `Confirm Password` = '$editConfirmPassword' WHERE `validated-form`.`S.no` = $editSno";
      $result =  mysqli_query($conn, $sql);
    
    } 


    //delete record
    if (isset($_GET['deleteSno'])) {
      $deleteSno = $_GET['deleteSno'];
      $sql = "DELETE FROM `validated-form` WHERE `S.no` = '$deleteSno'";
      $result = mysqli_query($conn, $sql);
  
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    </head>
    <body>

    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post">

      <input type="hidden" id="editSno" name="editSno">

      <div class="mb-3">
    <label for="editUsername" class="form-label">Username</label>
    <input type="text" class="form-control" name="editUsername" id="editUsername" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="editEmail" class="form-label">Email address</label>
    <input type="text" class="form-control" name="editEmail" id="editEmail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="editPassword" class="form-label">Password</label>
    <input type="text" class="form-control"  name="editPassword" id="editPassword">
  </div>

  <div class="mb-3">
    <label for="editConfirmPassword" class="form-label">Confirm Password</label>
    <input type="text" class="form-control" name="editConfirmPassword" id="editConfirmPassword">
  </div>
  </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
</form>

     
  </div>
</div>
      

    <table class="table">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Phone no.</th>
    <th>Action</th>
</tr>

<?php

     //creating table in DB
     $sql = "SELECT * FROM `validated-form`";

     $result = mysqli_query($conn, $sql);
 
     // find numbers of records returned
     // $num_rows = mysqli_num_rows($result);
 
         while($row = mysqli_fetch_assoc($result) ){
             // echo var_dump($row);
            // echo var_dump($row);
    echo "
    <tr id='data-row'>
    <td>{$row['Username']}</td>
    <td>{$row['Email']}</td>
    <td>{$row['Password']}</td>
    <td>{$row['Confirm Password']}</td>
    <td id={$row['S.no']}><button type='button' class='btn btn-primary edit' data-bs-toggle='modal' data-bs-target='#exampleModal'>Edit</button>
    <button type='button' name='delete' id='delete' class='btn btn-primary delete'>Delete</button></td>
    </tr>
    ";
         }

?>
</table>
<script>

      edits = document.getElementsByClassName("edit");
      Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
          tr = e.target.parentNode.parentNode;
          username = tr.getElementsByTagName("td")[0].innerText;
          email = tr.getElementsByTagName("td")[1].innerText;
          password = tr.getElementsByTagName("td")[2].innerText;
          confirm_password = tr.getElementsByTagName("td")[3].innerText;

          editUsername.value = username;
          editEmail.value = email;
          editPassword.value = password;
          editConfirmPassword.value = confirm_password;
          editSno.value = e.target.parentNode.id;

        })
      })


      deletes = document.getElementsByClassName("delete");
      Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
          deleteSno = e.target.parentNode.id;
          window.location.href = `/php-website/ass3/ass3_view.php?deleteSno=${deleteSno}`;
        })
      })

</script>
        
        <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    </body>
</html>