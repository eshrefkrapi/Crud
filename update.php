<?php
include 'connect.php';
$id=$_GET['updatedid'];
$sql = "select * from `crudtable1` where id='$id'";
$result= mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['update'])){
    $name=$POST['name'];
    $email=$POST['email'];
    $mobile=$POST['mob'];
    $password=$POST['pass'];

    $sql="update `crudtable1` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Data updated successfully";
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

  <form action="update.php" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name" autocomplete="off" Required value=<?php echo "$name"; ?>>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" autocomplete="off" Required value=<?php echo "$email"; ?>>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="mob">Mobile</label>
    <input type="number" class="form-control" id="mob"  placeholder="Enter your mobile number" name="mob" autocomplete="off" Required value=<?php echo "$mobile"; ?>>
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" autocomplete="off" Required value=<?php echo "$password"; ?>>
  </div>
  <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
  </div>
  </body>
</html>