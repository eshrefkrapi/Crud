<?php
include 'connect.php';
if(isset($_GET['deletedid'])){
    $id=$_GET['deletedid'];
    $sql="delete from `crudtable1` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>