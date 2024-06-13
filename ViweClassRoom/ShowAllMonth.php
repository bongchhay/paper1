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
if(isset($_POST['submit'])){
  $year=$_POST['year'];
  $month1= 1;
  $month2= 2;
  $month3= 3;
  $month4= 4;
  $month5= 5;
  $month6= 6;
  $month7= 7;
  $month8= 8;
  $month9= 9;
  $month10= 10;
  $month11= 11;
  $month12= 12;
	if (empty($year)) {
    $year=0000;
      // exit();
}}
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
    <h1 class="font2">តារាងទិន្នន័យក្នុងខែនីមួយៗ</h1>
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
<!-- <div class="IP7"><img src="../Photos/301.png" alt="Trulli" width="65" height="65"></div> -->
<!-- divបិទIP7 -->
<div class="IPA6">
</br>
<center>
  <form method="post">
  <!-- <label class="font5">Enter___________________គ្រាន់តែដកឃ្លា :</label> -->
    <label >បញ្ចូលឆ្នាំ :</label>
    <input type="text" placeholder="YYYY" name="year">
    <label class="font5">Ent</label>
    <button type="submit" class="btn btn-primary" name="submit" style="width:100px;height:35px;">ស្វែងរក</button>
</form>
</center>
<div class="scroll">
<table border="2" >
<thead>
    <tr>
    <!-- <th scope="col"><center><input type="text" class="search-input" style="width:50px;text-align: center;" placeholder="ID"></center></th> -->
    <th scope="col"><center><input type="text" class="search-input" style="width:1230px;text-align: center;" placeholder="ចំណូលប្រចាំខែនីមួយៗ"></center></th>
    </tr>
  </thead>
  <tbody>

<?php
// Check if year and month parameters are provided
if(isset($year) && isset($month1)) {
    // Sanitize input to prevent SQL injection
    // $year = mysqli_real_escape_string($con, $_GET['year']);
    // $month = mysqli_real_escape_string($con, $_GET['month']);

    // Construct SQL query to fetch data for the specified year and month
    $sql = "SELECT * FROM datayear WHERE YEAR(PaymentDate) = $year AND MONTH(PaymentDate) = $month1";
    $result = $con->query($sql);
    $totalPrice1 = 0;
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
              $price1 = $row["Payment"];
              $totalPrice1 += $price1;
        
      }
        }

        $sql = "SELECT * FROM datayear WHERE YEAR(PaymentDate) = $year AND MONTH(PaymentDate) = $month2";
        $result = $con->query($sql);
        $totalPrice2 = 0;
    
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                  $price2 = $row["Payment"];
                  $totalPrice2 += $price2;
            
          }
            }

            $sql = "SELECT * FROM datayear WHERE YEAR(PaymentDate) = $year AND MONTH(PaymentDate) = $month3";
            $result = $con->query($sql);
            $totalPrice3 = 0;
        
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                      $price3 = $row["Payment"];
                      $totalPrice3 += $price3;
                
              }
                }

                $sql = "SELECT * FROM datayear WHERE YEAR(PaymentDate) = $year AND MONTH(PaymentDate) = $month4";
                $result = $con->query($sql);
                $totalPrice4 = 0;
            
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                          $price4 = $row["Payment"];
                          $totalPrice4 += $price4;
                    
                  }
                    }

                    $sql = "SELECT * FROM datayear WHERE YEAR(PaymentDate) = $year AND MONTH(PaymentDate) = $month5";
                    $result = $con->query($sql);
                    $totalPrice5 = 0;
                
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                              $price5 = $row["Payment"];
                              $totalPrice5 += $price5;
                        
                      }
                        }

                        $sql = "SELECT * FROM datayear WHERE YEAR(PaymentDate) = $year AND MONTH(PaymentDate) = $month6";
                        $result = $con->query($sql);
                        $totalPrice6 = 0;
                    
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                  $price6 = $row["Payment"];
                                  $totalPrice6 += $price6;
                            
                          }
                            }

                            $sql = "SELECT * FROM datayear WHERE YEAR(PaymentDate) = $year AND MONTH(PaymentDate) = $month7";
                            $result = $con->query($sql);
                            $totalPrice7 = 0;
                        
                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while($row = $result->fetch_assoc()) {
                                      $price7 = $row["Payment"];
                                      $totalPrice7 += $price7;
                                
                              }
                                }

                                $sql = "SELECT * FROM datayear WHERE YEAR(PaymentDate) = $year AND MONTH(PaymentDate) = $month8";
                                $result = $con->query($sql);
                                $totalPrice8 = 0;
                            
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while($row = $result->fetch_assoc()) {
                                          $price8 = $row["Payment"];
                                          $totalPrice8 += $price8;
                                    
                                  }
                                    }

                                    $sql = "SELECT * FROM datayear WHERE YEAR(PaymentDate) = $year AND MONTH(PaymentDate) = $month9";
                                    $result = $con->query($sql);
                                    $totalPrice9 = 0;
                                
                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while($row = $result->fetch_assoc()) {
                                              $price9 = $row["Payment"];
                                              $totalPrice9 += $price9;
                                        
                                      }
                                        }

                                        $sql = "SELECT * FROM datayear WHERE YEAR(PaymentDate) = $year AND MONTH(PaymentDate) = $month10";
                                        $result = $con->query($sql);
                                        $totalPrice10 = 0;
                                    
                                        if ($result->num_rows > 0) {
                                            // Output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                  $price10 = $row["Payment"];
                                                  $totalPrice10 += $price10;
                                            
                                          }
                                            }

                                            $sql = "SELECT * FROM datayear WHERE YEAR(PaymentDate) = $year AND MONTH(PaymentDate) = $month11";
                                        $result = $con->query($sql);
                                        $totalPrice11 = 0;
                                    
                                        if ($result->num_rows > 0) {
                                            // Output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                  $price11 = $row["Payment"];
                                                  $totalPrice11 += $price11;
                                            
                                          }
                                            }

                                            $sql = "SELECT * FROM datayear WHERE YEAR(PaymentDate) = $year AND MONTH(PaymentDate) = $month12";
                                            $result = $con->query($sql);
                                            $totalPrice12 = 0;
                                        
                                            if ($result->num_rows > 0) {
                                                // Output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                      $price12 = $row["Payment"];
                                                      $totalPrice12 += $price12;
                                              } 
                                            }
else {
        if (empty($year) == '0000') {

          echo '
          <div class="alert">
      <span class="closebtn">&times;</span> 
      <strong class="font3">អ្នកភ្លេចបំពេញឆ្នាំហើយ!!!</strong>
      </div>
          ';
        }
    }

    echo'<tr>
    <td colspan="21">ចំណូលក្នុងខែ'.$month1.'ឆ្នាំ'.$year.'='.$totalPrice1.'$</td>
    </tr>
';
echo'<tr>
<td colspan="21">ចំណូលក្នុងខែ'.$month2.'ឆ្នាំ'.$year.'='.$totalPrice2.'$</td>
</tr>
';
echo'<tr>
<td colspan="21">ចំណូលក្នុងខែ'.$month3.'ឆ្នាំ'.$year.'='.$totalPrice3.'$</td>
</tr>
';
echo'<tr>
<td colspan="21">ចំណូលក្នុងខែ'.$month4.'ឆ្នាំ'.$year.'='.$totalPrice4.'$</td>
</tr>
';
echo'<tr>
<td colspan="21">ចំណូលក្នុងខែ'.$month5.'ឆ្នាំ'.$year.'='.$totalPrice5.'$</td>
</tr>
';
echo'<tr>
<td colspan="21">ចំណូលក្នុងខែ'.$month6.'ឆ្នាំ'.$year.'='.$totalPrice6.'$</td>
</tr>
';
echo'<tr>
<td colspan="21">ចំណូលក្នុងខែ'.$month7.'ឆ្នាំ'.$year.'='.$totalPrice7.'$</td>
</tr>
';
echo'<tr>
<td colspan="21">ចំណូលក្នុងខែ'.$month8.'ឆ្នាំ'.$year.'='.$totalPrice8.'$</td>
</tr>
';
echo'<tr>
<td colspan="21">ចំណូលក្នុងខែ'.$month9.'ឆ្នាំ'.$year.'='.$totalPrice9.'$</td>
</tr>
';
echo'<tr>
<td colspan="21">ចំណូលក្នុងខែ'.$month10.'ឆ្នាំ'.$year.'='.$totalPrice10.'$</td>
</tr>
';
echo'<tr>
<td colspan="21">ចំណូលក្នុងខែ'.$month11.'ឆ្នាំ'.$year.'='.$totalPrice11.'$</td>
</tr>
';
echo'<tr>
<td colspan="21">ចំណូលក្នុងខែ'.$month12.'ឆ្នាំ'.$year.'='.$totalPrice12.'$</td>
</tr>
';
echo'<tr>
<td colspan="21">ចំណូលក្នុងឆ្នាំ'.$year.'='.$totalPrice1 + $totalPrice2 + $totalPrice3 + $totalPrice4 + $totalPrice5 + $totalPrice6 + $totalPrice7 + $totalPrice8 + $totalPrice9 + $totalPrice10 + $totalPrice11 + $totalPrice12 .'$</td>
</tr>
';
} 

?>
   </tbody>
</table>
</div><!-- class="scroll -->
      </div><!-- divបិទIP4 -->
 </body>
</html>