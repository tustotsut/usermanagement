<?php
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include "/xampp/htdocs/usermanagement/db_conn.php";
$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$exists = false;
if(($password == $cpassword) && $exists == false){
    $sql = "INSERT INTO `user` ( `username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if($result){
        $showAlert = true;
    }
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php require 'nav/_nav.php' ?>
<h1 class="text-center">
    signup
</h1>
<div class="container">
<form class="text-center" action="/usermanagement/signup.php" method="post">
  <div class="mb-3" >
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div>
  
  
<button type="submit" class="btn btn-primary">Signup</button>
</form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>