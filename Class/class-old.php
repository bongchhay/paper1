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
        <title>联华学校</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<script src="sweetalert.min.js"></script>
<script>
    function submitForm(form) {
        swal({
            title: "Are you sure?",
            text: "ច្បាស់ទេថាអ្នកចង់លុប?",
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
    <h1 class="font2">តារ៉ាងទិន្នន័យថ្នាក់រៀនចាស់ៗ</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->

  <div class="IP3">
  <center>
  <a href="../Home/Home.php"><button class="button1" type="button" >Home</button></a>
<a href="../Teacher/teacher.php"><button class="button2" type="button" >Teacher</button></a>
<a href="../Student/student.php"><button class="button3" type="button" href="student.php">Student</button></a>
<a href="../Class/class.php"><button class="button4" type="button" href="student.php">Class</button></a>
<a href="../Payment/Payment.php"><button class="button5" type="button" href="student.php">Paymeant</button></a>
<a href="../TuitionFees/AddTuitionFees.php"><button class="button6" type="button" href="student.php">Add_QR</button></a>
<a href="../ViweClassRoom/class_room.php"><button class="button6" type="button" href="student.php">ClassRoom</button></a>
<a href="../StudentPay/ConfirmStudentPay.php"><button class="button6" type="button" href="student.php">អ្នកបង់តាមអ៊ីនធឺណែត</button></a><br>
</center>
</div><!-- divបិទIP3 -->


<div class="IP4">
<table border="2" width="100%" style="border-collapse:collapse;"><!-- <table>001 -->
                <tr><!-- <tr>002 -->
                <th colspan="3"><!-- <th>002 -->
                <a href="../Class/class.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:1040px;height:50px;" value="ទិន្នន័យថ្មីៗ"></a>
                <a href="../Class_Old_Date/class_old_date.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-danger" style="width:200px;height:50px;" value="ទិន្នន័យដែលបានលុប"></a>
                 </th><!-- <th>002 -->
                </tr><!-- <tr>002 -->
                  <tr><!-- <tr>001 -->
                  <th colspan="3"><!-- <th>001 -->
                  <div class="scroll">
<table border="2" width="100%" style="border-collapse:collapse;">
  <thead>
    <tr>
    <th scope="col"><center><input type="text" class="search-input" style="width:50px;text-align: center;" placeholder="ID"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="កំរិតសៀវភៅ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="ឈ្មោះគ្រូ_ID"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="ថ្ងៃខែសិក្សា"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ម៉ោងសិក្សា"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ថ្ងៃសិក្សា" list='scripts'></center></th>
      <datalist id='scripts'>
      <option value='ចន្ទ_សុក្រ'>
      <option value='សៅរ៏_អាទិត្យ'>
</datalist>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="តម្លៃសិក្សា"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="លេខបន្ទប់រៀន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ផ្សេងៗ"></center></th>
      <!-- <th scope="col"><center><input type="text" class="search-input" style="width:170px;text-align: center;" placeholder="កែប្រែ/លុប"></center></th> -->
    </tr>
  </thead>
  <tbody>
    <?php
       $sql="Select * from `tbl_class2`";
       $result=mysqli_query($con,$sql);
       if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['ID'];
          $BookLevel=$row['BookLevel'];
          $Teacher=$row['TeacherID'];
          $StudyDate=$row['StudyDate'];
          $StudyTime=$row['StudyTime'];
          $StudyDay=$row['StudyDay'];
          $TuitionFees=$row['TuitionFees'];
          $RoomNumber=$row['RoomNumber'];
          $Other=$row['Other'];
          echo'<tr>
          <td style="text-align: center;">C'.$id.'</td>
          <td style="text-align: center;">'.$BookLevel.'</td>
          <td style="text-align: center;">T'.$Teacher.'</td>
          <td style="text-align: center;">'.$StudyDate.'</td>
          <td style="text-align: center;">'.$StudyTime.'</td>
          <td style="text-align: center;">'.$StudyDay.'</td>
          <td style="text-align: center;">'.$TuitionFees.'</td>
          <td style="text-align: center;">'.$RoomNumber.'</td>
          <td style="text-align: center;">'.$Other.'</td>

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