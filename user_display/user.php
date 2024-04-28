
<?php
include '../connect_SPL/connect_SPL.php';
if(isset($_POST['submit'])){
  $name=$_POST['Name'];
  $username=$_POST['UserName'];
  $password=$_POST['Password'];
    $sql="insert into `user`(Name,UserName,Password)values('$name','$username','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo"successfully";
        header('location:user_display.php');
    }
    else{
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

    <title>user</title>
  </head>
  <body>
    <div class="container">
    <form method="post">

    <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"
    placeholder="Enter your Name" name="Name">
  </div>

  <div class="form-group">
    <label >UserName</label>
    <input type="text" class="form-control"
    placeholder="Enter your UserName" name="UserName">
  </div>

  <div class="form-group">
    <label >Password</label>
    <input type="Password" class="form-control"
    placeholder="Enter your Password" name="Password">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button class="btn btn-danger"><a href="user_display.php" class="text-light">BACK</a>
</form>
</div>
 </body>
</html>