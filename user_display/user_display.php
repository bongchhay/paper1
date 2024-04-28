<?php
 session_start(); 
 if(!isset($_SESSION['ID'])){
    header('location:../login_formHome/index.php');
    exit;
  }
?>
<?php
include '../connect_SPL/connect_SPL.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>User</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add_User</a>
<button class="btn btn-primary my-5"><a href="../Home/Home.php" class="text-light">Logout</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">UserName</th>
      <th scope="col">Password</th>
      
    </tr>
  </thead>
  <tbody>

  <?php
       $sql="Select * from `user`";
       $result=mysqli_query($con,$sql);
       if($result){
        // $row=mysqli_fetch_assoc($result);
        // echo $row['name'];
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['ID'];
          $name=$row['Name'];
          $username=$row['UserName'];
          $password=$row['Password'];
        
          echo'<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$username.'</td>
          <td>'.$password.'</td>
          
          <td>
          <button class="btn btn-primary"><a href="Update.php?updateid='.$id.'" class="text-light">Uopdate</a></button>
          <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">delete</a></button>
          </td>
          </tr>';
        }
       }
  ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
    </tr> -->
  </tbody>
</table>
</body>
</html>