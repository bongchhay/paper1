<?php
include '../connect_SPL/connect_SPL.php';
$id=$_GET['updateid'];
$sql="Select * from `user` where ID=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
          $name=$row['Name'];
          $username=$row['UserName'];
          $password=$row['Password'];
          
          

if(isset($_POST['submit'])){
    $name=$_POST['Name'];
    $username=$_POST['UserName'];
    $password=$_POST['Password'];
    $sql="update `user` set ID=$id,Name='$name',UserName='$username',Password='$password' where ID=$id";
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
    placeholder="Name" name="Name" autocomplete="off" value=<?php echo $name;?>>
  </div>

  <div class="form-group">
    <label >UserName</label>
    <input type="text" class="form-control"
    placeholder="Enter your name" name="UserName" autocomplete="off" value=<?php echo $username;?>>
  </div>

  <div class="form-group">
    <label >Password</label>
    <input type="Password" class="form-control"
    placeholder="Enter your Password" name="Password" autocomplete="off" value=<?php echo $password;?>>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
  <button class="btn btn-danger"><a href="user_display.php" class="text-light">BACK</a>
</form>
</div>
 </body>
</html>