<?php 
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <button class="btn btn-success my-5" name="add"><a href="useradd.php" style="color:white;">Add User</a></button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>


  <?php 
  $sql = "Select * from `crudtable1` ";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
    <button class="btn btn-info"><a href="update.php? updatedid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger my-2" ><a href="delete.php? deletedid='.$id.'" class="text-light">Delete</a></button>
  </td>
      </tr>';
    }
  }
  ?>

  </tbody>
</table> 
    </div>
</body>
</html>