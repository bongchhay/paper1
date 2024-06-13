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

<div class="IP1">
<body class="body1">
  <div Class="titel1"><!-- <ក្បាលលើ>បើក -->
  <center>
    <h1 class="font1">联华学校</h1>
    <h1 class="font2">តារ៉ាងទិន្នន័យបង់ប្រាក់ដែលមានទិន្នន័យពេញលេញ</h1>
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
<a href="../Payment/Payment.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:890px;height:50px;" value="មើលទិន្នន័យខ្លីៗ"></a>
<a href="../Viwe_Payment/OldDateAndNewDate.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-danger" style="width:150px;height:50px;" value="ទិន្នន័យចាស់ៗ"></a>
<a href="../Payment_Old_Date/Payment_Old_Date.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-danger" style="width:200px;height:50px;" value="មើលទិន្នន័យដែលបានលុប"></a>

</center>
</div><!-- divបិទIP3 -->


<div class="IP4">
<div class="scroll">
<table border="2" >
  <thead>
    <tr>
    <th scope="col"><center><input type="text" class="search-input" style="width:50px;text-align: center;" placeholder="ID"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:100px;text-align: center;" placeholder="ឈ្មោះចិន_ស"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:100px;text-align: center;" placeholder="ភេទ_ស"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:100px;text-align: center;" placeholder="ឈ្មោះចិន_គ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:100px;text-align: center;" placeholder="ភេទ_គ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="សៀវភៅភាគ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="ថ្ងៃចូលរៀន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="ម៉ោងរៀន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="រៀនថ្ងៃ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="លេខបន្ទប់"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="តម្លែក្នុងមួយខែ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ចំនួនខែដែលបង់"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="បញ្ចុះតម្លៃ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ចំនួនលុយបង់"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ថ្ងៃបង់ចូលរៀន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ថ្ងៃត្រូវបង់ម្ដងទៀត"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ចំណាំ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ថ្ងៃដែលមកបង់លុយ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="លេខវិក័យប័ត្រ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:100px;text-align: center;" placeholder="ផ្សេងៗ"></center></th>
    </tr>
  </thead>
  <tbody>

    <?php
       $sql="Select * from `views_payment`";
       $result=mysqli_query($con,$sql);
       if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['ID'];
          $SChineseName=$row['S_ChineseName'];
          $TGender=$row['S_Gender'];
          $TChineseName=$row['T_ChineseName'];
          $SGender=$row['T_Gender'];
          $BookLevel=$row['BookLevel'];
          $StudyDate=$row['StudyDate'];
          $StudyTime=$row['StudyTime'];
          $StudyDay=$row['StudyDay'];
          $RoomNumber=$row['RoomNumber'];
          $TuitionFees=$row['TuitionFees'];
          $ManyMonths=$row['ManyMonths'];
          $Discount=$row['Discount'];
          $Payment=$row['Payment'];
          $StartDate=$row['StartDate'];
          $EndDate=$row['EndDate'];
          $PaymentDate=$row['PaymentDate'];
          $InvoiceNumber=$row['InvoiceNumber'];
          $Other=$row['Other'];
          date_default_timezone_set('Asia/Kolkata');
          $date2 =  date ("Y/m/d") ;
          $dateTimestamp1 = strtotime($EndDate);
          $dateTimestamp2 = strtotime($date2);
          
          if ($dateTimestamp1 > $dateTimestamp2){//（ដល់ថ្ងៃបង់ <= មិនទាន់ដល់  ）
            echo'<tr>
            <td style="text-align: center;">P'.$id.'</td>
            <td style="text-align: center;">'.$SChineseName.'</td>
            <td style="text-align: center;">'.$SGender.'</td>
            <td style="text-align: center;">'.$TChineseName.'</td>
            <td style="text-align: center;">'.$TGender.'</td>
            <td style="text-align: center;">'.$BookLevel.'</td>
            <td style="text-align: center;">'.$StudyDate.'</td>
            <td style="text-align: center;">'.$StudyTime.'</td>
            <td style="text-align: center;">'.$StudyDay.'</td>
            <td style="text-align: center;">'.$RoomNumber.'</td>
            <td style="text-align: center;">'.$TuitionFees.' $</td>
            <td style="text-align: center;">'.$ManyMonths.' ខែ</td>
            <td style="text-align: center;">'.$Discount.' $</td>
            <td style="text-align: center;">'.$Payment.' $</td>
            <td style="text-align: center;">'.$StartDate.'</td>
            <td style="text-align: center;">'.$EndDate.'</td>
            <td style="text-align: center;">មិនទាន់ដល់ថ្ងែបង់</td>
            <td style="text-align: center;">'.$PaymentDate.'</td>
            <td style="text-align: center;">NVP'.$InvoiceNumber.'</td>
            <td style="text-align: center;">'.$Other.'</td>
            </tr>';
         
          }
          else{
            echo'<tr>
            <td style="text-align: center;">P'.$id.'</td>
            <td style="text-align: center;">'.$SChineseName.'</td>
            <td style="text-align: center;">'.$SGender.'</td>
            <td style="text-align: center;">'.$TChineseName.'</td>
            <td style="text-align: center;">'.$TGender.'</td>
            <td style="text-align: center;">'.$BookLevel.'</td>
            <td style="text-align: center;">'.$StudyDate.'</td>
            <td style="text-align: center;">'.$StudyTime.'</td>
            <td style="text-align: center;">'.$StudyDay.'</td>
            <td style="text-align: center;">'.$RoomNumber.'</td>
            <td style="text-align: center;">'.$TuitionFees.' $</td>
            <td style="text-align: center;">'.$ManyMonths.' ខែ</td>
            <td style="text-align: center;">'.$Discount.' $</td>
            <td style="text-align: center;">'.$Payment.' $</td>
            <td style="text-align: center;">'.$StartDate.'</td>
            <td style="text-align: center;"><div class="fbtn btn-danger">'.$EndDate.'</div></td>
            <td style="text-align: center;"><div class="fbtn btn-danger">ដល់ថ្ងែបង់ប្រាក់</div></td>
            <td style="text-align: center;">'.$PaymentDate.'</td>
            <td style="text-align: center;">NVP'.$InvoiceNumber.'</td>
            <td style="text-align: center;">'.$Other.'</td>
            </tr>';
          }
        }
       }
  ?>
  </tbody>
</table>
</div><!-- class="scroll -->
      </div><!-- divបិទIP4 -->
</body>
</div><!-- divបិទIP1 -->
</html>