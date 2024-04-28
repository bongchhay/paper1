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
    <h1 class="font2">សាលាចិនលានហួខេត្តបាត់ដំបង</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->

  <div class="IP3">
  <center>
  <a href="../Home/Home.php"><button class="button1" type="button" >Home</button></a>
<a href="../Teacher/teacher.php"><button class="button2" type="button" >Teacher</button></a>
<a href="../Student/student.php"><button class="button3" type="button" href="student.php">Student</button></a>
<a href="../Class/class.php"><button class="button4" type="button" href="student.php">Class</button></a>
<a href="../Payment/Payment.php"><button class="button4" type="button" href="student.php">Paymeant</button></a>
<a href="../TuitionFees/AddTuitionFees.php"><button class="button5" type="button" href="student.php">Add_QR</button></a>
<a href="../ViweClassRoom/class_room.php"><button class="button6" type="button" href="student.php">ClassRoom</button></a>
<a href="../StudentPay/ConfirmStudentPay.php"><button class="button6" type="button" href="student.php">អ្នកបង់តាមអ៊ីនធឺណែត</button></a><br>
</center>
</div><!-- divបិទIP3 -->


<div class="IP4">
     <div class="div1">
     <center><p>ចំនួនគ្រូបង្រៀនសរុប</p></center>
     <?php
     $Teacher = "select * from tbl_teacher";
     $Teacher_run = mysqli_query($con, $Teacher);
     if($Teacher_total = mysqli_num_rows($Teacher_run))
     {
        echo '<center><p1 class="p1">'.$Teacher_total.'</p1></center>';
     }
     else
     {
        echo '<center><p1 class="p1">0</p1></center>';
     }
     ?>
  </div><!-- off div1 -->
       
  <div class="div2">
     <center><p>ចំនួនថ្នាក់សរុប</p></center>
     <?php
     $Teacher = "select * from tbl_class";
     $Teacher_run = mysqli_query($con, $Teacher);
     if($Teacher_total = mysqli_num_rows($Teacher_run))
     {
        echo '<center><p1 class="p1">'.$Teacher_total.'</p1></center>';
     }
     else
     {
        echo '<center><p1 class="p1">0</p1></center>';
     }
     ?>
  </div><!-- off div2 -->

  <div class="div3">
     <center><p>ចំនួនសិស្សសរុប</p></center>
     <?php
     $Teacher = "select * from tbl_student";
     $Teacher_run = mysqli_query($con, $Teacher);
     if($Teacher_total = mysqli_num_rows($Teacher_run))
     {
        echo '<center><p1 class="p1">'.$Teacher_total.'</p1></center>';
     }
     else
     {
        echo '<center><p1 class="p1">0</p1></center>';
     }
     ?>
  </div><!-- off div3 -->

  <div class="div6">
     <center><p>ចំនួននាក់បង់ប្រាក់និងអ្នកដល់ថ្ងៃបង់ប្រាក់</p></center>
     <?php
     $Teacher = "select * from tbl_payment";
     $Teacher_run = mysqli_query($con, $Teacher);
     if($Teacher_total = mysqli_num_rows($Teacher_run))
     {
        echo '<center><p1 class="p1">'.$Teacher_total.'</p1></center>';
     }
     else
     {
        echo '<center><p1 class="p1">0</p1></center>';
     }
     ?>
  </div><!-- off div4 -->

  <div class="div5">
     <center><p>ចំនួននាក់ដល់ថ្ងៃបង់ប្រាក់</p></center>
     <?php
   $tableName = "tbl_payment";
$expiryField = "EndDate";
$sql = "SELECT COUNT(*) AS expired_count FROM $tableName WHERE $expiryField < NOW()";
$result = mysqli_query($con, $sql);
$expiredCount = mysqli_fetch_assoc($result)['expired_count'];

// echo "Number of expired items: " . $expiredCount . PHP_EOL;
echo '<center><p1 class="p1">'. $expiredCount .'</p1></center>';
     
     ?>
  </div><!-- off div5 -->

  <div class="div4">
     <center><p>ចំនួននាក់បង់ប្រាក់ហើយ</p></center>
     <?php
     $tableName = "tbl_payment";
     $expiryField = "EndDate";
     $sql = "SELECT COUNT(*) AS expired_count FROM $tableName WHERE $expiryField > NOW()";
     $result = mysqli_query($con, $sql);
     $expiredCount = mysqli_fetch_assoc($result)['expired_count'];
     
     // echo "Number of expired items: " . $expiredCount . PHP_EOL;
     echo '<center><p1 class="p1">'. $expiredCount .'</p1></center>';
     ?>
  </div><!-- off div6 -->

  <div class="div7">
  <select name="BookLevel" style="width:630px;height:45px;">
    <option>ចំនួនថ្នាក់នីៗ</option>
<?php
   $sql = "SELECT BookLevel,COUNT(*) from tbl_class group by BookLevel ";
  $result= mysqli_query($con,$sql) or die ('error');
  if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){?>
     <option value=<?php echo 'hello'?>>
     <?php echo $row['BookLevel'] ?>
     <?php echo " មាន " ?>
     <?php echo $row["COUNT(*)"] ?> 
     <?php echo " ថ្នាក់ " ?>
     </option> <?php 
       
     }
  }
  ?>
  </select>
  </div><!-- off div7 -->

  <div class="div8">
  <select name="BookLevel" style="width:630px;height:45px;">
    <option>ចំនួនថ្នាក់ចន្ទសុក្រនិងសៅរ៏អាទិត្យ</option>
<?php
   $sql = "SELECT StudyDay,COUNT(*) from tbl_class group by StudyDay ";
  $result= mysqli_query($con,$sql) or die ('error');
  if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){?>
     <option value=<?php echo 'hello'?>>
     <?php echo $row['StudyDay'] ?>
     <?php echo " មាន " ?>
     <?php echo $row["COUNT(*)"] ?> 
     <?php echo " ថ្នាក់ " ?>
     </option> <?php 
       
     }
  }
  ?>
  </select>
  </div><!-- off div8 -->

  <div class="div9">
     <center><p>មានអ្នកបង់លុយតាមអ៊ីនធឺណែត</p></center>
     <?php
     $Teacher = "select * from studentpay";
     $Teacher_run = mysqli_query($con, $Teacher);
     if($Teacher_total = mysqli_num_rows($Teacher_run))
     {
        echo '<center><p1 class="p1">'.$Teacher_total.'</p1></center>';
     }
     else
     {
        echo '<center><p1 class="p1">0</p1></center>';
     }
     ?>
  </div><!-- off div9 -->

      </div><!-- divបិទIP4 -->
</body>
</div><!-- divបិទIP1 -->
</html>