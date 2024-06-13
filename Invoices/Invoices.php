<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="teat.css">
        <script src="teat.js"></script>
        <title>联华学校</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<!-- update -->
<?php
include '../connect_SPL/connect_SPL.php';
$id=$_GET['updateid'];
$sql="Select * from `views_payment1` where ID=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$SChineseName=$row['S_ChineseName'];
$SGender=$row['S_Gender'];
$TChineseName=$row['T_ChineseName'];
$TGender=$row['T_Gender'];
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
$PayBack=$row['PayBack'];
$BackMonth=$row['BackMonth'];
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
    <h1 class="font2">សាលារៀនចិន​ លានហួ</h1>
    <h1 class="font1">联华学校</h1>
    <h1 class="font2">បង្កាន់ដៃបង់ប្រាក់រៀនគួរ(补习上课证)</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->
  <div class="add1"><!-- <class="add1">បើក -->
  <center>
  <table border="2" width="850px" style="border-collapse:collapse;">

  <tr>
  <td class="font3">លេខវិក័យប័ត្រ(上课证号)</td>
  <td class="font3" style="width:300px;text-align: center;">NPV<?php echo $InvoiceNumber;?></td>
  </tr>

  <tr>
    <td class="font3">ឈ្មោះសិស្ស(姓名)</td>
    <td class="font3" style="text-align: center;"><?php echo $SChineseName;?></td>
  </tr>

  <tr>
    <td class="font3">ភេទ(性别)</td>
    <td class="font3" style="text-align: center;"><?php echo $SGender;?></td>
  </tr>

  <tr>
    <td class="font3">ឈ្មោះគ្រូ(老师的名)</td>
    <td class="font3" style="text-align: center;"><?php echo $TChineseName;?></td>
  </tr>

  <tr>
    <td class="font3">ភេទ(性别)</td>
    <td class="font3" style="text-align: center;"><?php echo $TGender;?></td>
  </tr>

  <tr>
    <td class="font3">ថ្នាក់(班级)</td>
    <td class="font3" style="text-align: center;"><?php echo $BookLevel;?></td>
  </tr>

  <tr>
    <td class="font3">ថ្ងៃចួលរៀន(日期上课)</td>
    <td class="font3" style="text-align: center;"><?php echo $StudyDate;?></td>
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
    <td class="font3">លេខបន្ទប់(课室号)</td>
    <td class="font3" style="text-align: center;"><?php echo $RoomNumber;?></td>
  </tr>

  <tr>
    <td class="font3">តម្លៃក្នុងមួយថ្ងៃ(一个月的学费)</td>
    <td class="font3" style="text-align: center;"><?php echo $TuitionFees;?> $</td>
  </tr>

  <tr>
    <td class="font3">ចំនួនខែដែលបង់(月数交学费)</td>
    <td class="font3" style="text-align: center;"><?php echo $ManyMonths;?> ខែ</td>
  </tr>

  <tr>
    <td class="font3">បញ្ចុះតម្លៃ(打折)</td>
    <td class="font3" style="text-align: center;"><?php echo $Discount;?> $</td>
  </tr>

  <tr>
  <td class="font3">ចំនួនលុយបង់(交学费钱)</td>
  <td class="font3" style="text-align: center;"><?php echo $Payment;?> $</td>
  </tr>

  <tr>
  <td class="font3">ថ្ងៃបង់ចូលរៀន(交学费的日期)</td>
  <td class="font3" style="text-align: center;"><?php echo $StartDate;?></td>
  </tr>

  <tr>
  <td class="font3">ថ្ងៃដែលត្រូវបង់ម្ដងទៀត(再交学费的日期)</td>
  <td class="font3" style="text-align: center;"><?php echo $EndDate;?></td>
  </tr>

  <tr>
  <td class="font3">ចំនួនលុយសង(还钱)</td>
  <td class="font3" style="text-align: center;"><?php echo $PayBack;?> $</td>
  </tr>

  <tr>
  <td class="font3">ខែដែលសង(还的月)</td>
  <td class="font3" style="text-align: center;"><?php echo $BackMonth;?></td>
  </tr>

  <tr>
  <td class="font3">ថ្ងៃមកបង់លុយ(来交学费的日期)</td>
  <td class="font3" style="text-align: center;"><?php echo $PaymentDate;?></td>
  </tr>

  <tr>
  <td class="font3">ផ្សេងៗ(备注)</td>
  <td class="font3" style="text-align: center;"><?php echo $Other;?></td>
  </tr>

</table><br>
<p class="font3">រៀបចំដោ :..............   ហត្តលេខា :............... កាលបរិច្ឆេទ :...............</p>
</center>
</div><!-- <class="add1">បើក -->
 </body>

</html>