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
include '../connect_SPL/connect_SPL.php';
$year=0;
if(isset($_POST['submit'])){
  $year=$_POST['year'];
}
?>

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
    <h1 class="font2">តារាងទិន្នន័យក្នុងមួយឆ្នាំ</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->
  <div class="IP3">
  <center>
  <a href="../Home/Home.php"><button class="button1" type="button" >Home</button></a>
<a href="../Teacher/teacher.php"><button class="button2" type="button" >Teacher</button></a>
<a href="../Student/student.php"><button class="button3" type="button" href="student.php">Student</button></a>
<a href="../Class/class.php"><button class="button4" type="button" href="student.php">Class</button></a>
<a href="../Payment/Payment.php"><button class="button6" type="button" href="student.php">Paymeant</button></a>
<a href="../TuitionFees/AddTuitionFees.php"><button class="button5" type="button" href="student.php">Add_QR</button></a>
<a href="../ViweClassRoom/class_room.php"><button class="button5" type="button" href="student.php">ClassRoom</button></a>
<a href="../StudentPay/ConfirmStudentPay.php"><button class="button5" type="button" href="student.php">អ្នកបង់តាមអ៊ីនធឺណែត</button></a><br>
<!-- hhhhhhhh -->
<a href="../Payment/Payment.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:200px;height:50px;" value="មើលទិន្នន័យខ្លីៗ"></a>
<a href="../ViweClassRoom/ShowYear.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:200px;height:50px;" value="មើលទិន្នន័យក្នុងមួយឆ្នាំ"></a>
<a href="../ViweClassRoom/ShowYearMonth.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:200px;height:50px;" value="មើលទិន្នន័យក្នុងមួយខែ"></a>
<a href="../ViweClassRoom/ShowYearMonthDay.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:200px;height:50px;" value="មើលទិន្នន័យក្នុងមួយថ្ងៃ"></a>
</center>
</div><!-- divបិទIP3 -->
<!-- <div class="IP5"><img src="../Photos/300.png" alt="Trulli" width="60" height="60" ></div> -->
<!-- divបិទIP5 -->
<div class="IP7"><img src="../Photos/301.png" alt="Trulli" width="65" height="65"></div><!-- divបិទIP7 -->
<div class="IPA6">
</br>
<center>
<form method="post">
  <!-- <label class="font5">Enter_________________________________________គ្រាន់តែដកឃ្លា :</label> -->
    <label >បញ្ចូលឆ្នាំ :</label>
    <input type="text" placeholder="ឆ្នាំ​ YYYY" name="year">
    <label class="font5">Ent</label>
  <button type="submit" class="btn btn-primary" name="submit" style="width:100px;height:35px;">ស្វែងរក</button>
</form>
</center>
<div class="scroll">
<table border="2" >
<thead>
    <tr>
    <!-- <th scope="col"><center><input type="text" class="search-input" style="width:50px;text-align: center;" placeholder="ID"></center></th> -->
    <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="លេខវិក័យបត្រ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:100px;text-align: center;" placeholder="IDសិស្ស"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="IDថ្នាក់រៀន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="ភាគសៀវភៅ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="តម្លៃក្នុងមួយខៃ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="ចំនូនខែ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="បញ្ចុះតម្លៃ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ចំនូនលុយ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="ថ្ងៃចូលរៀន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ថ្ងែបញ្ជប់"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ចំណាំ" list='scripts'></center></th>
      <datalist id='scripts'>
      <option value='មិនទាន់ដល់ថ្ងែបង់'>
      <option value='ដល់ថ្ងែបង់ប្រាក់'>
</datalist>
      <!-- <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ចំនូនខែដែលផុត"></center></th> -->
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ចំនួនលុយសង"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ខែដែលសង"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ថ្ងៃមកបង់"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:100px;text-align: center;" placeholder="ផ្សេងៗ"></center></th>

    </tr>
  </thead>
  <tbody>

<?php
if($year > "1"){
  $sql = "SELECT * FROM newandold WHERE YEAR(PaymentDate) = '$year'";
  $result = $con->query($sql);
  $totalPrice = 0;
  $rowCount = 0; 
  if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
      // Access data from each column using $row['column_name']
      $id=$row['ID'];
      $StudenID=$row['StudenID'];
      $ClassID=$row['ClassID'];
      $BookLevel=$row['BookLevel'];
      $TuitionFees=$row['TuitionFees'];
      $ManyMonths=$row['ManyMonths'];
      $Payment=$row['Payment'];
      $StartDate=$row['StartDate'];
      $EndDate=$row['EndDate'];
      $Discount=$row['Discount'];
      $PaymentDate=$row['PaymentDate'];
      $InvoiceNumber=$row['InvoiceNumber'];
      $Other=$row['Other'];
      $PayBack=$row['PayBack'];
      $BackMonth=$row['BackMonth'];
      date_default_timezone_set('Asia/Kolkata');
      $date2 =  date ("Y/m/d") ;
      $dateTimestamp1 = strtotime($EndDate);
      $dateTimestamp2 = strtotime($date2);
      if ($dateTimestamp1 > $dateTimestamp2){//（ដល់ថ្ងៃបង់ <= មិនទាន់ដល់  ）
        echo'<tr>
        <td style="text-align: center;">NVP'.$InvoiceNumber.'</td>
        <td style="text-align: center;">S'.$StudenID.'</td>
        <td style="text-align: center;">C'.$ClassID.'</td>
        <td style="text-align: center;">'.$BookLevel.'</td>
        <td style="text-align: center;">'.$TuitionFees.' $</td>
        <td style="text-align: center;">'.$ManyMonths.' ខែ</td>
        <td style="text-align: center;">'.$Discount.' $</td>
        <td style="text-align: center;">'.$Payment.' $</td>
        <td style="text-align: center;">'.$StartDate.'</td>
        <td style="text-align: center;">'.$EndDate.'</td>
        <td style="text-align: center;">មិនទាន់ដល់ថ្ងែបង់</td>
       
        <td style="text-align: center;">'.$PayBack.' $</td>
        <td style="text-align: center;">'.$BackMonth.'</td>
        <td style="text-align: center;">'.$PaymentDate.'</td>
        <td style="text-align: center;">'.$Other.'</td>

        </tr>';
      }
      else{
        $diffDate = abs (strtotime($date2) - strtotime($EndDate));
        $yesrsDiff = floor($diffDate/(365*60*60*24));
        $mothDiff = floor(($diffDate-$yesrsDiff * 365*60*60*24)/(30*60*60*24));
        echo'<tr>
            <td style="text-align: center;">NVP'.$InvoiceNumber.'</td>
            <td style="text-align: center;">S'.$StudenID.'</td>
            <td style="text-align: center;">C'.$ClassID.'</td>
            <td style="text-align: center;">'.$BookLevel.'</td>
            <td style="text-align: center;">'.$TuitionFees.' $</td>
            <td style="text-align: center;">'.$ManyMonths.' ខែ</td>
            <td style="text-align: center;">'.$Discount.' $</td>
            <td style="text-align: center;">'.$Payment.' $</td>
            <td style="text-align: center;">'.$StartDate.'</td>
            <td style="text-align: center;"><div class="fbtn btn-danger">'.$EndDate.'</div></td>
            <td style="text-align: center;"><div class="fbtn btn-danger">ដល់ថ្ងែបង់ប្រាក់</div></td>
            
            <td style="text-align: center;">'.$PayBack.' $</td>
            <td style="text-align: center;">'.$BackMonth.'</td>
            <td style="text-align: center;">'.$PaymentDate.'</td>
            <td style="text-align: center;">'.$Other.'</td>

            </tr>';
      }  
      $price = $row["Payment"];
              $totalPrice += $price;
              $rowCount++;
              // $StartDate=$row['StartDate'];
    }
  } else {
    echo '
    <div class="alert">
<span class="closebtn">&times;</span> 
<strong class="font3">សុំទោស។ទិន្នន័យដែលអ្នកស្វែងរកមិនមានទេ!!!</strong>
</div>
    ';
  }
  echo'<tr>
  <td colspan="21">ចំណូលសរុបក្នុងឆ្នាំ'.$year.'='.$totalPrice.'$</td>
  </tr>
';
echo'
<div class="IP8"><p1 class="font4">('.$rowCount.')</p1></div><!-- divបិទIP6 -->
';
}
?>
   </tbody>
</table>
</div><!-- class="scroll -->
      </div><!-- divបិទIP4 -->
 </body>
</html>