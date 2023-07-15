<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mob'];
    $password=$_POST['pass'];
    $sql="insert into `crudtable1` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Data inserted successfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title></title>
  </head>
  <body>

  <div class="container my-5">

  <form action="useradd.php" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name" autocomplete="off" Required>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" autocomplete="off" Required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="mob">Mobile</label>
    <input type="number" class="form-control" id="mob"  placeholder="Enter your mobile number" name="mob" autocomplete="off" Required>
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" autocomplete="off" Required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>
  </body>
</html>