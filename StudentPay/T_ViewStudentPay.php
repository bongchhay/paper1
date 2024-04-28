<?php
  // Create database connection
  include '../connect_SPL/connect_SPL.php';

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="teat.css">
        <script src="teat.js"></script>
        <title>Student_OldDate</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<div class="IP1">
<body class="body1">
    <div class="titel1">
      <center>
        <h1 class="font1">联华学校</h1>
        <h1 class="font2">អ្នកបង់ថ្លៃសិក្សាតាមអ៊ីនធឺណែត</h1>
      </center>
    </div>
    <div class="IP3">
      <center>
      <a href="../Home/Home.php"><button class="button1" type="button" >Home</button></a>
<a href="../Teacher/teacher.php"><button class="button2" type="button" >Teacher</button></a>
<a href="../Student/student.php"><button class="button3" type="button" href="student.php">Student</button></a>
<a href="../Class/class.php"><button class="button4" type="button" href="student.php">Class</button></a>
<a href="../Payment/Payment.php"><button class="button5" type="button" href="student.php">Paymeant</button></a>
<a href="../TuitionFees/AddTuitionFees.php"><button class="button6" type="button" href="student.php">Add_QR</button></a>
<a href="../ViweClassRoom/class_room.php"><button class="button6" type="button" href="student.php">ClassRoom</button></a>
<a href="../StudentPay/ConfirmStudentPay.php"><button class="button7" type="button" href="student.php">អ្នកបង់តាមអ៊ីនធឺណែត</button></a><br>
 <!-- hhhhhh -->
 <a href="../StudentPay/ConfirmStudentPay.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:1100px;height:50px;" value="មើលទិន្នន័យមិនពេញលេញ"></a>
<a href="../StudentPay/ViewStudentPay_old.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-danger" style="width:147px;height:50px;" value="មើលទិន្នន័យចាស់"></a>
      </div><!-- divបិទIP3 -->    
    <div class="IP4">
    <div class="scroll2">
    <table border="2" width="100%" style="border-collapse:collapse;">
  <thead>
    <tr>
    <!-- <th scope="col"><center><input type="text" class="search-input" style="width:50px;text-align: center;" placeholder="ID"></center></th> -->
    <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="លេខវិក័យប័ត្រ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ស_ឈ្មោះចិន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="ស_ភេទ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="គ_ឈ្មោះចិន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="គ_ភេទ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="សៀវភៅ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="ម៉ោងសិក្សា"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="ថ្ងៃសិក្សា"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="មួយខែ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="លេខបន្ទប់រៀន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="បង់សម្រាប់ខែ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="លេខទូរស័ព្ទ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="ថ្ងៃចុចបង់លុយ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ផ្សេងៗ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ស្ថានភាព"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="វិក័យប័ត្រ"></center></th>
    </tr>
  </thead>
  <tbody>
    <?php
       $sql="Select * from `viewstudentpayment`";
       $result=mysqli_query($con,$sql);
       if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['ID'];
          $InvoiceNumber=$row['InvoiceNumber'];
          $S_ChineseName=$row['S_ChineseName'];
          $S_Gender=$row['S_Gender'];
          $T_ChineseName=$row['T_ChineseName'];
          $T_Gender=$row['T_Gender'];
          $BookLevel=$row['BookLevel'];
          $StudyTime=$row['StudyTime'];
          $StudyDay=$row['StudyDay'];
          $TuitionFees=$row['TuitionFees'];
          $RoomNumber=$row['RoomNumber'];
          $PayMonthly=$row['PayMonthly'];
          $PhoneNumber=$row['PhoneNumber'];
          $DateClickToPay=$row['DateClickToPay'];
          $text=$row['text'];
          echo'<tr>
          <td style="text-align: center;">VOP'.$InvoiceNumber.'</td>
          <td style="text-align: center;">'.$S_ChineseName.'</td>
          <td style="text-align: center;">'.$S_Gender.'</td>
          <td style="text-align: center;">'.$T_ChineseName.'</td>
          <td style="text-align: center;">'.$T_Gender.'</td>
          <td style="text-align: center;">'.$BookLevel.'</td>
          <td style="text-align: center;">'.$StudyTime.'</td>
          <td style="text-align: center;">'.$StudyDay.'</td>
          <td style="text-align: center;">'.$TuitionFees.'</td>
          <td style="text-align: center;">'.$RoomNumber.'</td>
          <td style="text-align: center;">'.$PayMonthly.'</td>
          <td style="text-align: center;">'.$PhoneNumber.'</td>
          <td style="text-align: center;">'.$DateClickToPay.'</td>
          <td style="text-align: center;">'.$text.'</td>
          <td style="text-align: center;">បានបង់ប្រាក់ហើយ</td>
          <td style="text-align: center;"><button class="btn btn-primary"><a href="Invoices.php?updateid='.$id.'" class="text-light">Invoices</a></button></td>
          </tr>';
        }
       }
  ?>
  </tbody>
</table>
    </div><!-- <div class="scroll2"> -->
    </div><!-- divបិទIP4 -->
</body>
</div><!-- divបិទIP1 -->
</html>
