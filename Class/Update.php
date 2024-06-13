<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="teat.css">
        <script src="teat.js"></script>
        <title>联华学校</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="teat.css">
        <script src="teat.js"></script>
        <title>Update_class</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<?php
include '../connect_SPL/connect_SPL.php';
if(isset($_POST['submit'])){
  $BookLevel=$_POST['BookLevel'];
  $Teacher=$_POST['TeacherID'];
  $StudyDate=$_POST['StudyDate'];
  $StudyTime=$_POST['StudyTime'];
  $StudyDay=$_POST['StudyDay'];
  $TuitionFees=$_POST['TuitionFees'];
  $RoomNumber=$_POST['RoomNumber'];
  $Other=$_POST['Other'];
$sql="insert into `tbl_class_old`(BookLevel,TeacherID,StudyDate,StudyTime,StudyDay,TuitionFees,RoomNumber,Other)values('$BookLevel','$Teacher','$StudyDate','$StudyTime','$StudyDay','$TuitionFees','$RoomNumber','$Other')";
$result=mysqli_query($con,$sql);
//     if($result){
//         // echo"successfully";
//         header('location:class.php');
//     }
//     else{
//     die(mysqli_error($con));
// }
}
?>

<?php
include '../connect_SPL/connect_SPL.php';
$id=$_GET['updateid'];
$sql="Select * from `tbl_class` where ID=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$BookLevel=$row['BookLevel'];
$Teacher=$row['TeacherID'];
$StudyDate=$row['StudyDate'];
$StudyTime=$row['StudyTime'];
$StudyDay=$row['StudyDay'];
$TuitionFees=$row['TuitionFees'];
$RoomNumber=$row['RoomNumber'];
$Other=$row['Other'];

if(isset($_POST['submit'])){
  $BookLevel=$_POST['BookLevel'];
  $Teacher=$_POST['TeacherID'];
  $StudyDate=$_POST['StudyDate'];
  $StudyTime=$_POST['StudyTime'];
  $StudyDay=$_POST['StudyDay'];
  $TuitionFees=$_POST['TuitionFees'];
  $RoomNumber=$_POST['RoomNumber'];
  $Other=$_POST['Other'];
    // $to_day=$_POST['to_day'];
    $sql="update `tbl_class2` set ID=$id,BookLevel='$BookLevel',TeacherID='$Teacher',StudyDate='$StudyDate',StudyTime='$StudyTime',StudyDay='$StudyDay',TuitionFees='$TuitionFees',RoomNumber='$RoomNumber',Other='$Other' where ID=$id";
    $result=mysqli_query($con,$sql);
}
if(isset($_POST['submit'])){
  $BookLevel=$_POST['BookLevel'];
  $Teacher=$_POST['TeacherID'];
  $StudyDate=$_POST['StudyDate'];
  $StudyTime=$_POST['StudyTime'];
  $StudyDay=$_POST['StudyDay'];
  $TuitionFees=$_POST['TuitionFees'];
  $RoomNumber=$_POST['RoomNumber'];
  $Other=$_POST['Other'];
    // $to_day=$_POST['to_day'];
    $sql="update `tbl_class` set ID=$id,BookLevel='$BookLevel',TeacherID='$Teacher',StudyDate='$StudyDate',StudyTime='$StudyTime',StudyDay='$StudyDay',TuitionFees='$TuitionFees',RoomNumber='$RoomNumber',Other='$Other' where ID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo"successfully";
        header('location:class.php');

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
    <h1 class="font2">សូមកែប្រែទិន្នន័យថ្នាក់ដោយប្រុងប្រយ័ត្ន</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->
  <div class="add1"><!-- <class="add1">បើក -->
  <table border="2" width="1258px" style="border-collapse:collapse;" class="table1">
                <tr>
    <th>
    <div class="container">
    <form method="post">

    <div class="form-group">
    <label >BookLevel</label>
    <input type="text" class="form-control"
    placeholder="Enter your BookLevel" name="BookLevel" autocomplete="off" value=<?php echo $BookLevel;?>>
  </div>

  <div class="form-group">
    <label >Teacher_T(ID)</label>
    <input type="text" class="form-control"
    placeholder="Enter T(Number)" name="TeacherID" autocomplete="off" value=<?php echo $Teacher;?>>
  </div>

  <div class="form-group">
    <label >StudyDate</label>
    <input type="date" class="form-control"
    placeholder="Enter your StudyDate" name="StudyDate" autocomplete="off" value=<?php echo $StudyDate;?>>
  </div>

  <div class="form-group">
    <label >StudyTime</label>
    <input type="text" class="form-control"
    placeholder="Enter your StudyTime" name="StudyTime" autocomplete="off" value=<?php echo $StudyTime;?>>
  </div>

  <div class="form-group">
    <label >StudyDay</label>
    <input type="text" class="form-control"
    placeholder="Enter your StudyDay" name="StudyDay" autocomplete="off" value=<?php echo $StudyDay;?> list='scripts'>
    <datalist id='scripts'>
      <option value='ចន្ទ_សុក្រ'>
      <option value='សៅរ៏_អាទិត្យ'>
</datalist>
  </div>

  <div class="form-group">
    <label >TuitionFees</label>
    <input type="text" class="form-control"
    placeholder="Enter your TuitionFees" name="TuitionFees" autocomplete="off" value=<?php echo $TuitionFees;?>>
  </div>

  <div class="form-group">
    <label >RoomNumber</label>
    <input type="text" class="form-control"
    placeholder="Enter your RoomNumber" name="RoomNumber" autocomplete="off" value=<?php echo $RoomNumber;?>>
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
  <a href="class.php" class="text-light"><input name="btnsearch" class="btn btn-danger" style="width:622px;height:50px;" value="BACK"></a>
  <button type="submit" class="btn btn-primary" name="submit" style="width:623px;height:50px ;" onclick="alert('Update Successfully!!!')">update</button>  
</th>
</tr>
</form>
</div>
</table>
</div><!-- <class="add1">បិទ -->
 </body>

</html>