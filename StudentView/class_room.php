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
  <div class="IP3">
  <center>
  <a href="../Home/Home.php"><button class="button1" type="button" >Home</button></a>
<a href="../Teacher/teacher.php"><button class="button2" type="button" >Teacher</button></a>
<a href="../Student/student.php"><button class="button3" type="button" href="student.php">Student</button></a>
<a href="../Class/class.php"><button class="button4" type="button" href="student.php">Class</button></a>
<a href="../Payment/Payment.php"><button class="button5" type="button" href="student.php">Paymeant</button></a>
<a href="../ViweClassRoom/class_room.php"><button class="button6" type="button" href="student.php">ClassRoom</button></a>
<form method="post">
    <label control-lsblr class="font3">ថ្នាក់រៀន:</lable>
  <select name="BookLevel" style="width:500px;height:45px;">
    <option>Select</option>
<?php
  $sql = "SELECT * from class";
  $result= mysqli_query($con,$sql) or die ('error');
  if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result)){?>
     <option value=<?php echo $row['ID']?>>
     <?php echo $row['BookLevel'] ?>
     <?php echo " & " ?>
     <?php echo $row['StudyTime'] ?> 
     <?php echo " & " ?>
     <?php echo $row['StudyDay'] ?>
     <?php echo " & " ?>
     <?php echo $row['T_ChineseName'] ?>
     </option> <?php 
       
     }
  }
  ?>
  </select>
<button type="submit" class="btn btn-primary" name="submit" style="width:100px;height:45px;">Research</button>
</th>
</tr>
</form>
</center>
</div><!-- divបិទIP3 -->
<div class="IP5"><img src="../Photos/300.png" alt="Trulli" width="185" height="185"></div><!-- divបិទIP5 -->
<div class="IP7"><img src="../Photos/301.png" alt="Trulli" width="65" height="65"></div><!-- divបិទIP7 -->
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
if(isset($_POST['submit'])){
          $BookLevel1=$_POST['BookLevel'];
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
          Other
          FROM views_payment WHERE ID='$BookLevel1'";
          $result = $con->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              // echo "<br> id: ". $row["ID"]. " - Name: ". $row["S_ChineseName"]. " BookLevel: ". $row["BookLevel"]. "<br>";
              $EndDate=$row['EndDate'];
              date_default_timezone_set('Asia/Kolkata');
              $date2 =  date ("Y/m/d") ;
              $dateTimestamp1 = strtotime($EndDate);
              $dateTimestamp2 = strtotime($date2);
              
              if ($dateTimestamp1 > $dateTimestamp2){//（ដល់ថ្ងៃបង់ <= មិនទាន់ដល់  ）
                echo'<tr>
                <td style="text-align: center;">'.$row["ID"].'</td>
                <td style="text-align: center;">'.$row["S_ChineseName"].'</td>
                <td style="text-align: center;">'.$row["S_Gender"].'</td>
                <td style="text-align: center;">'.$row["T_ChineseName"].'</td>
                <td style="text-align: center;">'.$row["T_Gender"].'</td>
                <td style="text-align: center;">'.$row['BookLevel'].'</td>
                <td style="text-align: center;">'.$row['StudyDate'].'</td>
                <td style="text-align: center;">'.$row['StudyTime'].'</td>
                <td style="text-align: center;">'.$row['StudyDay'].'</td>
                <td style="text-align: center;">'.$row['RoomNumber'].'</td>
                <td style="text-align: center;">'.$row['TuitionFees'].'</td>
                <td style="text-align: center;">'.$row['ManyMonths'].'</td>
                <td style="text-align: center;">'.$row['Discount'].'</td>
                <td style="text-align: center;">'.$row['Payment'].'</td>
                <td style="text-align: center;">'.$row['StartDate'].'</td>
                <td style="text-align: center;">'.$EndDate.'</div></td>
                <td style="text-align: center;">មិនទាន់ដល់ថ្ងែបង់</td>
                <td style="text-align: center;">'.$row['PaymentDate'].'</td>
                <td style="text-align: center;">'.$row['InvoiceNumber'].'</td>
                <td style="text-align: center;">'.$row['Other'].'</td>
                </tr>';
             
              }
              else{
                echo'<tr>
                <td style="text-align: center;">'.$row["ID"].'</td>
                <td style="text-align: center;">'.$row["S_ChineseName"].'</td>
                <td style="text-align: center;">'.$row["S_Gender"].'</td>
                <td style="text-align: center;">'.$row["T_ChineseName"].'</td>
                <td style="text-align: center;">'.$row["T_Gender"].'</td>
                <td style="text-align: center;">'.$row['BookLevel'].'</td>
                <td style="text-align: center;">'.$row['StudyDate'].'</td>
                <td style="text-align: center;">'.$row['StudyTime'].'</td>
                <td style="text-align: center;">'.$row['StudyDay'].'</td>
                <td style="text-align: center;">'.$row['RoomNumber'].'</td>
                <td style="text-align: center;">'.$row['TuitionFees'].'</td>
                <td style="text-align: center;">'.$row['ManyMonths'].'</td>
                <td style="text-align: center;">'.$row['Discount'].'</td>
                <td style="text-align: center;">'.$row['Payment'].'</td>
                <td style="text-align: center;">'.$row['StartDate'].'</td>
                <td style="text-align: center;">'.$EndDate.'</div></td>
                <td style="text-align: center;"><div class="fbtn btn-danger">'.$EndDate.'</div></td>
                <td style="text-align: center;"><div class="fbtn btn-danger">ដល់ថ្ងែបង់ប្រាក់</div></td>
                <td style="text-align: center;">'.$row['PaymentDate'].'</td>
                <td style="text-align: center;">'.$row['InvoiceNumber'].'</td>
                <td style="text-align: center;">'.$row['Other'].'</td>
                </tr>';
              }
   
           }
           //  រាប់ចំនួនសិស្ស
           $sql = "SELECT COUNT(*) AS expired_count FROM views_payment WHERE ID='$BookLevel1'";
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
                   $sql = "SELECT COUNT(*) AS expired_count FROM $tableName WHERE ID='$BookLevel1' AND $expiryField < NOW()";
                   $result = mysqli_query($con, $sql);
                   $expiredCount = mysqli_fetch_assoc($result)['expired_count'];
                   
                   // echo "Number of expired items: " . $expiredCount . PHP_EOL;
                   echo '<div class="IP6"><p1 class="font4">('. $expiredCount .')</p1></div><!-- divបិទIP6 -->';  
          }
          else {
            echo '
            <div class="alert">
  <span class="closebtn">&times;</span> 
  <strong class="font3">សុំទោស។ថ្នាក់ដែលអ្នកស្វែងរកមិនមានទេ!!!</strong>
</div>
            ';
          }
    // $result=mysqli_query($con,$sql);
}

?>
   </tbody>
</table>
</div><!-- class="scroll -->
      </div><!-- divបិទIP4 -->
 </body>
</html>