<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="teat.css">
        <link rel="stylesheet" href="teat1.css">
        <script src="teat.js"></script>
        <title>联华学校</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<!-- update -->
<?php
include '../connect_SPL/connect_SPL.php';
$id=$_GET['updateid'];
$sql="Select * from `viewstudentpayment` where ID=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
// $id=$row['ID'];
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

  <body class="body2">
  <div Class="titel1"><!-- <ក្បាលលើ>បើក -->
  <center>
    <h1 class="font6">សាលារៀនចិន​ លានហួ</h1>
    <h1 class="font5">联华学校</h1>
    <h1 class="font6">បង្កាន់ដៃបង់ប្រាក់តាមអ៊ីនធឺណែត(补习上课证)</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->
  <div class="add3"><!-- <class="add1">បើក -->
  <center>
  <table border="2" width="850px" style="border-collapse:collapse;">

  <tr>
  <td class="font3">លេខវិក័យប័ត្រ(上课证号)</td>
  <td class="font3" style="width:300px;text-align: center;">VOP<?php echo $InvoiceNumber;?></td>
  </tr>

  <tr>
    <td class="font3">ឈ្មោះសិស្ស(姓名)</td>
    <td class="font3" style="text-align: center;"><?php echo $S_ChineseName;?></td>
  </tr>

  <tr>
    <td class="font3">ភេទ(性别)</td>
    <td class="font3" style="text-align: center;"><?php echo $S_Gender;?></td>
  </tr>

  <tr>
    <td class="font3">ឈ្មោះគ្រូ(老师的名)</td>
    <td class="font3" style="text-align: center;"><?php echo $T_ChineseName;?></td>
  </tr>

  <tr>
    <td class="font3">ភេទ(性别)</td>
    <td class="font3" style="text-align: center;"><?php echo $T_Gender;?></td>
  </tr>

  <tr>
    <td class="font3">សៀវភៅ(书)</td>
    <td class="font3" style="text-align: center;"><?php echo $BookLevel;?></td>
  </tr>

  <tr>
    <td class="font3">ម៉ោងរៀន(上课时间)</td>
    <td class="font3" style="text-align: center;"><?php echo $StudyTime;?></td>
  </tr>

  <tr>
    <td class="font3">រៀនថ្ងៃ(上课的日子)</td>
    <td class="font3" style="text-align: center;"><?php echo $StudyDay;?></td>
  </tr>

  <tr>
    <td class="font3">តម្លៃក្នុងមួយខែ(一个月的学费)</td>
    <td class="font3" style="text-align: center;"><?php echo $TuitionFees;?></td>
  </tr>

  <tr>
    <td class="font3">លេខបន្ទប់(课室号)</td>
    <td class="font3" style="text-align: center;"><?php echo $RoomNumber;?></td>
  </tr>

  <tr>
    <td class="font3">បង់សម្រាប់ខែ(支付当月费)</td>
    <td class="font3" style="text-align: center;"><?php echo $PayMonthly;?> </td>
  </tr>

  <tr>
    <td class="font3">លេខទូរស័ព្ទ(手机号码)</td>
    <td class="font3" style="text-align: center;"><?php echo $PhoneNumber;?></td>
  </tr>

  <tr>
    <td class="font3">ថ្ងៃចុចបង់លុយ(按交学费的日子)</td>
    <td class="font3" style="text-align: center;"><?php echo $DateClickToPay;?></td>
  </tr>

</table><br>
<p class="font3">រៀបចំដោ :..............   ហត្តលេខា :............... កាលបរិច្ឆេទ :...............</p>
</center>
</div><!-- <class="add1">បើក -->
 </body>

</html>