
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="teat.css">
        <script src="teat.js"></script>
        <title>联华学校</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<?php
include '../connect_SPL/connect_SPL.php';
if(isset($_POST['submit'])){
  $KhmerName=$_POST['S_KhmerName'];
  $ChineseName=$_POST['S_ChineseName'];
  $Gender=$_POST['S_Gender'];
  $DateOfBirth=$_POST['DateOfBirth'];
  $PhoneNumber=$_POST['PhoneNumber'];
  $Other=$_POST['Other'];
    $sql="insert into `tbl_student_old`(S_KhmerName,S_ChineseName,S_Gender,DateOfBirth,PhoneNumber,Other)values('$KhmerName','$ChineseName','$Gender','$DateOfBirth','$PhoneNumber','$Other')";
    $result=mysqli_query($con,$sql);
//     if($result){
//         // echo"successfully";
//         header('location:student.php');
//     }
//     else{
//     die(mysqli_error($con));
// }
}
?>
<?php
include '../connect_SPL/connect_SPL.php';
$id=$_GET['updateid'];
$sql="Select * from `tbl_student` where ID=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$KhmerName=$row['S_KhmerName'];
$ChineseName=$row['S_ChineseName'];
$Gender=$row['S_Gender'];
$DateOfBirth=$row['DateOfBirth'];
$PhoneNumber=$row['PhoneNumber'];
$Other=$row['Other'];
if(isset($_POST['submit'])){
  $KhmerName=$_POST['S_KhmerName'];
  $ChineseName=$_POST['S_ChineseName'];
  $Gender=$_POST['S_Gender'];
  $DateOfBirth=$_POST['DateOfBirth'];
  $PhoneNumber=$_POST['PhoneNumber'];
  $Other=$_POST['Other'];
    // $to_day=$_POST['to_day'];
    $sql="update `tbl_student` set ID=$id,S_KhmerName='$KhmerName',S_ChineseName='$ChineseName',S_Gender='$Gender',DateOfBirth='$DateOfBirth',PhoneNumber='$PhoneNumber',Other='$Other' where ID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo"successfully";
        header('location:student.php');
    
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
    <link rel="stylesheet" href="teat.css">
    <title>Update</title>
  </head>

  <body class="body1">
  <div Class="titel1"><!-- <ក្បាលលើ>បើក -->
  <center>
    <h1 class="font1">联华学校</h1>
    <h1 class="font2">សូមកែប្រែទិន្នន័យសិស្សដោយប្រុងប្រយ័ត្ន</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->
  <div class="add1"><!-- <class="add1">បើក -->
  <table border="2" width="1258px" style="border-collapse:collapse;" class="table1">
                <tr>
    <th>
    <div class="container">
    <form method="post">

    <div class="form-group">
    <label >KhmerName</label>
    <input type="text" class="form-control"
    placeholder="Enter your KhmerName" name="S_KhmerName" autocomplete="off" value=<?php echo $KhmerName;?>>
  </div>

  <div class="form-group">
    <label >ChineseName</label>
    <input type="text" class="form-control"
    placeholder="Enter your ChineseName" name="S_ChineseName" autocomplete="off" value=<?php echo $ChineseName;?>>
  </div>

  <div class="form-group">
    <label >Gender</label>
    <input type="text" class="form-control" placeholder="Enter your Gender" name="S_Gender" autocomplete="off" value=<?php echo $Gender;?> list='scripts'>
    <datalist id='scripts'>
      <option value='Male'>
      <option value='Female'>
</datalist>
  </div>

  <div class="form-group">
    <label >DateOfBirth</label>
    <input type="date" class="form-control"
    placeholder="Enter your DateOfBirth" name="DateOfBirth" autocomplete="off" value=<?php echo $DateOfBirth;?>>
  </div>

  <div class="form-group">
    <label >PhoneNumber</label>
    <input type="text" class="form-control"
    placeholder="Enter your PhoneNumber" name="PhoneNumber" autocomplete="off" value=<?php echo $PhoneNumber;?>>
  </div>

  <div class="form-group">
    <label >Other</label>
    <input type="text" class="form-control"
    placeholder="Enter your Other" name="Other" autocomplete="off" value=<?php echo $Other;?>>
  </div>

</select>
</div>
</th>
</tr>
<tr>
  <th>
  <a href="student.php" class="text-light"><input name="btnsearch" class="btn btn-danger" style="width:622px;height:50px;" value="BACK"></a>
  <button type="submit" class="btn btn-primary" name="submit" style="width:623px;height:50px ;" onclick="alert('Update Successfully!!!')">update</button>  
</th>
</tr>
</form>
</div>
</table>
</div><!-- <class="add1">បិទ -->
 </body>

</html>