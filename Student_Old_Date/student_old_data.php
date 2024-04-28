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
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="teat.css">
        <script src="teat.js"></script>
        <title>Student_OldDate</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<script src="sweetalert.min.js"></script>
<script>
    function submitForm(form) {
        swal({
          title: "បញ្ជាក់៖លុបហើយមិនអាចទាញមកវិញបានទេ។",
            text: "ច្បាស់ទេថាអ្នកពិតជាចង់លុបវាចេញ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then(function (isOkay) {
            if (isOkay) {
                form.submit();
            }
        });
        return false;
    }
</script>
<div class="IP1">
<body class="body1">
  <div Class="titel1"><!-- <ក្បាលលើ>បើក -->
  <center>
    <h1 class="font1">联华学校</h1>
    <h1 class="font2">តារ៉ាងទិន្នន័យចាស់ៗរបស់សិស្ស</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->

  <div class="IP3">
  <center>
  <a href="../Home/Home.php"><button class="button1" type="button" >Home</button></a>
<a href="../Teacher/teacher.php"><button class="button2" type="button" >Teacher</button></a>
<a href="../Student/student.php"><button class="button3" type="button" href="student.php">Student</button></a>
<a href="../Class/class.php"><button class="button4" type="button" href="student.php">Class</button></a>
<a href="../Payment/Payment.php"><button class="button5" type="button" href="student.php">Paymeant</button></a>
<a href="../TuitionFees/AddTuitionFees.php"><button class="button5" type="button" href="student.php">Add_QR</button></a>
<a href="../ViweClassRoom/class_room.php"><button class="button6" type="button" href="student.php">ClassRoom</button></a>
<a href="../StudentPay/ConfirmStudentPay.php"><button class="button6" type="button" href="student.php">អ្នកបង់តាមអ៊ីនធឺណែត</button></a><br>
</center>
</div><!-- divបិទIP3 -->


<div class="IP4">
<table border="2" width="100%" style="border-collapse:collapse;"><!-- <table>001 -->
                <tr><!-- <tr>002 -->
                <th colspan="3"><!-- <th>002 -->
                <center>
                <a href="../Student/student.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:1247px;height:50px;" value="View New Date"></a>
</center>
                 </th><!-- <th>002 -->
                </tr><!-- <tr>002 -->
                  <tr><!-- <tr>001 -->
                  <th colspan="3"><!-- <th>001 -->
                  <div class="scroll">
<table border="2" width="100%" style="border-collapse:collapse;">
  <thead>
    <tr>
    <th scope="col"><center><input type="text" class="search-input" style="width:50px;text-align: center;" placeholder="ID"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ឈ្មោះខ្មែរ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="ឈ្មោះចិន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="ភេទ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ថ្ងៃខែឆ្នាំកំណើត"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="លេខទូរស័ព្ទ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ផ្សេងៗ"></center></th>
      <th scope="col"><center>កែប្រែ/លុប</center></th>
    </tr>
  </thead>
  <tbody>
    <?php
       $sql="Select * from `tbl_student_old`";
       $result=mysqli_query($con,$sql);
       if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['ID'];
          $KhmerName=$row['S_KhmerName'];
          $ChineseName=$row['S_ChineseName'];
          $Gender=$row['S_Gender'];
          $DateOfBirth=$row['DateOfBirth'];
          $PhoneNumber=$row['PhoneNumber'];
          $Other=$row['Other'];
          echo'<tr>
          <td style="text-align: center;">SOD'.$id.'</td>
          <td style="text-align: center;">'.$KhmerName.'</td>
          <td style="text-align: center;">'.$ChineseName.'</td>
          <td style="text-align: center;">'.$Gender.'</td>
          <td style="text-align: center;">'.$DateOfBirth.'</td>
          <td style="text-align: center;">'.$PhoneNumber.'</td>
          <td style="text-align: center;">'.$Other.'</td>
          <td style="text-align: center;">
          <form method="POST" action="delete.php?deleteid='.$id.'" onsubmit="return submitForm(this);">
    <button type="submit" class="btn btn-danger">Delete</button>
</form></td>
          </tr>';
        }
       }
  ?>
  </tbody>
</table>
</div><!-- class="scroll -->
      </th><!-- <th>001 -->
      </tr><!-- <tr>001 -->
</table><!-- <table>001 -->
      </div><!-- divបិទIP4 -->
</body>
</div><!-- divបិទIP1 -->
</html>