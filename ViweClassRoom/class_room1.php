<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="ABC1.css">
        <link rel="stylesheet" href="ABC2.css">
        <script src="teat.js"></script>
        <title>联华学校</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<!doctype html>
<html lang="en">
<?php
include '../connect_SPL/connect_SPL.php'; ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="teat.css">
    <title>user</title>
  </head>
  <div class="IP1">
<body class="body1">
  <div Class="titel1"><!-- <ក្បាលលើ>បើក -->
  <center>
    <h1 class="font1">联华学校</h1>
    <h1 class="font2">តារាងសិស្សថ្នាក់នីមួយៗ</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->
  <div class="ppp">
  <center>
  <a href="../Home/Home.php"><button class="button1" type="button" >Home</button></a>
<a href="../Teacher/teacher.php"><button class="button2" type="button" >Teacher</button></a>
<a href="../Student/student.php"><button class="button3" type="button" href="student.php">Student</button></a>
<a href="../Class/class.php"><button class="button4" type="button" href="student.php">Class</button></a>
<a href="../Payment/Payment.php"><button class="button5" type="button" href="student.php">Paymeant</button></a>
<a href="../TuitionFees/AddTuitionFees.php"><button class="button5" type="button" href="student.php">Add_QR</button></a>
<a href="../ViweClassRoom/class_room.php"><button class="button6" type="button" href="student.php">ClassRoom</button></a>
<a href="../StudentPay/ConfirmStudentPay.php"><button class="button5" type="button" href="student.php">អ្នកបង់តាមអ៊ីនធឺណែត</button></a><br>
<!-- hhhhhhhh -->
</center>
<form method="post">
<label class="font6">E n t l</label>
<label >ឈ្មោះគ្រូ :</label>
    <input type="text" placeholder="ឈ្មោះគ្រូជាភាសាចិន" name="name">    
    <label >កំរិតសៀវភៅ :</label>
    <input type="text" placeholder="中文第几册" name="book"><br>
    <label class="font6">Ee</label>
    <label >ម៉ោងសិក្សា :</label>
    <input type="text" placeholder="Ex: 5-6_PM" name="time">
    <label class="font6">E ntl</label>
    <label >ថ្ងែសិក្សា :</label>
    <input type="text" placeholder="Ex: ចន្ទ_សុក្រ" name="day">
    <!-- <label class="font5">Ent</label> -->
    <button type="submit" class="btn btn-primary" name="submit" style="width:140px;height:35px;">ស្វែងរក</button>
    <div class="pp1"><button class="btn btn-primary" style="width:140px;height:35px;"><a href="../ViweClassRoom/class_room.php" class="text-light">ជ្រើសរើសថ្នាក់</a></button></div>
</th>
</tr>
</form>
</div><!-- divបិទIP3 -->
<div class="IP5"><img src="../Photos/300.png" alt="Trulli" width="60" height="60" ></div><!-- divបិទIP5 -->
<div class="IP7"><img src="../Photos/301.png" alt="Trulli" width="65" height="65"></div><!-- divបិទIP7 -->
<div class="kkk">
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
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ចំនូនខែដែលផុត"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ចំនួនលុយសង"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ខែដែលសង"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ថ្ងៃដែលមកបង់លុយ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="លេខវិក័យប័ត្រ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:100px;text-align: center;" placeholder="ផ្សេងៗ"></center></th>
    </tr>
  </thead>
  <tbody>
<?php
          $dateTimestamp4 = "MM" ;
          $totalPrice = 0;
          $totalPrice1 = 0;
if(isset($_POST['submit'])){
          $name=$_POST['name'];
          $book=$_POST['book'];
          $time=$_POST['time'];
          $day=$_POST['day'];
          $sql = "SELECT 
          ID, 
          S_ChineseName, 
          S_Gender,
          T_ChineseName, 
          T_Gender, 
          BookLevel, 
          StudyDate,
          StudyTime,
          StudyDay,
          RoomNumber,
          TuitionFees,
          ManyMonths,
          Discount,
          Payment,
          StartDate,
          EndDate,
          PaymentDate,
          InvoiceNumber,
          Other,
          PayBack,
          BackMonth
          FROM views_payment WHERE T_ChineseName='$name' AND BookLevel='$book' AND StudyTime='$time' AND StudyDay='$day'";
          $result = $con->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              // echo "<br> id: ". $row["ID"]. " - Name: ". $row["S_ChineseName"]. " BookLevel: ". $row["BookLevel"]. "<br>";
              $EndDate=$row['EndDate'];
              $PaymentDate=$row['PaymentDate'];
              date_default_timezone_set('Asia/Kolkata');
              $date2 =  date ("Y/m/d") ;
              $dateTimestamp1 = strtotime($EndDate);
              $dateTimestamp2 = strtotime($date2);
              $dateTimestamp3 = date("m", strtotime($PaymentDate));
              $dateTimestamp4 = date("m", strtotime($date2));
              
              if ($dateTimestamp1 > $dateTimestamp2){//（ដល់ថ្ងៃបង់ <= មិនទាន់ដល់  ）
                echo'<tr>
                <td style="text-align: center;">C'.$row["ID"].'</td>
                <td style="text-align: center;">'.$row["S_ChineseName"].'</td>
                <td style="text-align: center;">'.$row["S_Gender"].'</td>
                <td style="text-align: center;">'.$row["T_ChineseName"].'</td>
                <td style="text-align: center;">'.$row["T_Gender"].'</td>
                <td style="text-align: center;">'.$row['BookLevel'].'</td>
                <td style="text-align: center;">'.$row['StudyDate'].'</td>
                <td style="text-align: center;">'.$row['StudyTime'].'</td>
                <td style="text-align: center;">'.$row['StudyDay'].'</td>
                <td style="text-align: center;">'.$row['RoomNumber'].'</td>
                <td style="text-align: center;">'.$row['TuitionFees'].' $</td>
                <td style="text-align: center;">'.$row['ManyMonths'].' ខែ</td>
                <td style="text-align: center;">'.$row['Discount'].'​$</td>
                <td style="text-align: center;">'.$row['Payment'].' $</td>
                <td style="text-align: center;">'.$row['StartDate'].'</td>
                <td style="text-align: center;">'.$EndDate.'</div></td>
                <td style="text-align: center;">មិនទាន់ដល់ថ្ងែបង់</td>
                <td style="text-align: center;">0</td>
                <td style="text-align: center;">'.$row['PayBack'].' $</td>
                <td style="text-align: center;">'.$row['BackMonth'].'</td>
                <td style="text-align: center;">'.$row['PaymentDate'].'</td>
                <td style="text-align: center;">'.$row['InvoiceNumber'].'</td>
                <td style="text-align: center;">'.$row['Other'].'</td>
                </tr>';
              }
              else{
                $diffDate = abs (strtotime($date2) - strtotime($EndDate));
            $yesrsDiff = floor($diffDate/(365*60*60*24));
            $mothDiff = floor(($diffDate-$yesrsDiff * 365*60*60*24)/(30*60*60*24));
                echo'<tr>
                <td style="text-align: center;">C'.$row["ID"].'</td>
                <td style="text-align: center;">'.$row["S_ChineseName"].'</td>
                <td style="text-align: center;">'.$row["S_Gender"].'</td>
                <td style="text-align: center;">'.$row["T_ChineseName"].'</td>
                <td style="text-align: center;">'.$row["T_Gender"].'</td>
                <td style="text-align: center;">'.$row['BookLevel'].'</td>
                <td style="text-align: center;">'.$row['StudyDate'].'</td>
                <td style="text-align: center;">'.$row['StudyTime'].'</td>
                <td style="text-align: center;">'.$row['StudyDay'].'</td>
                <td style="text-align: center;">'.$row['RoomNumber'].'</td>
                <td style="text-align: center;">'.$row['TuitionFees'].' $</td>
                <td style="text-align: center;">'.$row['ManyMonths'].' ខែ</td>
                <td style="text-align: center;">'.$row['Discount'].' $</td>
                <td style="text-align: center;">'.$row['Payment'].' $</td>
                <td style="text-align: center;">'.$row['StartDate'].'</td>
                <td style="text-align: center;"><div class="fbtn btn-danger">'.$EndDate.'</div></td>
                <td style="text-align: center;"><div class="fbtn btn-danger">ដល់ថ្ងែបង់ប្រាក់</div></td>
                <td style="text-align: center;"><div class="fbtn btn-danger">'.$mothDiff.'</div></td>
                <td style="text-align: center;">'.$row['PayBack'].' $</td>
                <td style="text-align: center;">'.$row['BackMonth'].'</td>
                <td style="text-align: center;">'.$row['PaymentDate'].'</td>
                <td style="text-align: center;">'.$row['InvoiceNumber'].'</td>
                <td style="text-align: center;">'.$row['Other'].'</td>
                </tr>';
              }
        if($dateTimestamp1 > $dateTimestamp2){
          $price = $row["TuitionFees"];
              $totalPrice += $price;
        }
        if($dateTimestamp4 == $dateTimestamp3){
          $price1 = $row["PayBack"];
              $totalPrice1 += $price1;
        }
           }

           //  រាប់ចំនួនសិស្ស
           $sql = "SELECT COUNT(*) AS expired_count FROM views_payment WHERE T_ChineseName='$name' AND BookLevel='$book' AND StudyTime='$time' AND StudyDay='$day'";
           $result = $con->query($sql);
           if ($result->num_rows > 0) {
             // Output the number of students
             $row = $result->fetch_assoc();
             echo '<div class="IP8"><p1 class="font4">('. $row["expired_count"] .')</p1></div><!-- divបិទIP6 -->';
           } else {
             echo "No students found in the class.";
           }
          //  រាប់ចំនួនសិស្សបង់លុយ
                   $tableName = "views_payment";
                   $expiryField = "EndDate";
                   $sql = "SELECT COUNT(*) AS expired_count FROM $tableName WHERE T_ChineseName='$name' AND BookLevel='$book' AND StudyTime='$time' AND StudyDay='$day' AND $expiryField < NOW()";
                   $result = mysqli_query($con, $sql);
                   $expiredCount = mysqli_fetch_assoc($result)['expired_count'];
                   
                   // echo "Number of expired items: " . $expiredCount . PHP_EOL;
                   echo '<div class="IP6"><p1 class="font4">('. $expiredCount .')</p1></div><!-- divបិទIP6 -->';  
          }
          else {
            echo '
            <div class="alert">
  <span class="closebtn">&times;</span> 
  <strong class="font3">សុំទោស។ថ្នាក់ដែលអ្នកស្វែងរកមិនមានសិស្សទេ!!!</strong>
</div>
            ';
          }
    // $result=mysqli_query($con,$sql);
}
echo'<tr>
          <td colspan="23">សិស្សមកបង់ក្នុងខែ('.$dateTimestamp4.')សរុប='.$totalPrice.'$</td>
          </tr>';
echo'<tr>
          <td colspan="23">ខែ('.$dateTimestamp4.')សិស្សយកលុយមកសងសរុប='.$totalPrice1.'$</td>
          </tr>';
echo'<tr>
          <td colspan="23">ចំណូលក្នុងខែ('.$dateTimestamp4.')សរុប='.$totalPrice+$totalPrice1.'$</td>
          </tr>';
          $total=($totalPrice+$totalPrice1)/2;
echo'<tr>
          <td colspan="23">លុយដែលគ្រូត្រូវទទួលបានក្នុងខែ('.$dateTimestamp4.')សរុប='.$total.'$</td>
          </tr>';
?>
   </tbody>
</table>
</div><!-- class="scroll -->
      </div><!-- divបិទIP4 -->
 </body>
</html>