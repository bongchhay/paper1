<?php
  // Create database connection
  include '../connect_SPL/connect_SPL.php';

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  $result = mysqli_query($con, "SELECT * FROM images");
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
        <h1 class="font2">តារ៉ាងតម្លៃសិក្សា</h1>
      </center>
    </div>
    <div class="IP3">
      <center>
      <a href="../Home/Home.php"><button class="button1" type="button" >Home</button></a>
<a href="../Teacher/teacher.php"><button class="button2" type="button" >Teacher</button></a>
<a href="../Student/student.php"><button class="button3" type="button" href="student.php">Student</button></a>
<a href="../Class/class.php"><button class="button4" type="button" href="student.php">Class</button></a>
<a href="../Payment/Payment.php"><button class="button5" type="button" href="student.php">Paymeant</button></a>
<a href="../TuitionFees/AddTuitionFees.php"><button class="button7" type="button" href="student.php">Add_QR</button></a>
<a href="../ViweClassRoom/class_room.php"><button class="button6" type="button" href="student.php">ClassRoom</button></a>
<a href="../StudentPay/ConfirmStudentPay.php"><button class="button6" type="button" href="student.php">អ្នកបង់តាមអ៊ីនធឺណែត</button></a><br>
<!-- hhhhhhhhhhhhhhhhhh -->
<a href="AddTuitionFees.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:1247px;height:50px;" value="GO_TO_ADD_QR"></a>
      </center>
      </div><!-- divបិទIP3 -->    
    <div class="IP4">
    <div class="scroll2">
    <table border="2" width="100%" style="border-collapse:collapse;">
  <thead>
    <tr>
    <th scope="col"><center>QR</center></th>
    <th scope="col"><center><input type="text" class="search-input" style="width:980px;text-align: center;" placeholder="រកតម្លៃសិក្សា" list='scripts'></center>
    <datalist id='scripts'>
      <option value='中文第一册'>
      <option value='中文第二册'>
      <option value='中文第三册'>
      <option value='中文第四册'>
      <option value='中文第五册'>
      <option value='中文第六册'>
      <option value='中文第七册'>
      <option value='中文第八册'>
      <option value='中文第九册'>
      <option value='中文第十册'>
      <option value='中文第十一册'>
      <option value='中文第十二册'>
</datalist>
  </th>
    </tr>
  </thead>
        <?php
          while ($row = mysqli_fetch_array($result)) {
            // echo '<img src="images/'.$row['image'].'" width="150" height="100">';
            // echo ' <input type="text" class="search-input" style="width:150px;text-align: center;" placeholder='.$row['text'].'>';
            // echo '    ';
            echo'
            <tr>
            <td><center><img src="images/'.$row['image'].'" width="250" height="300"></center></td>
            <td><center><h1>'.$row['text'].'</h1></center></td>
            ';
          }
        ?>
        </table>
    </div><!-- <div class="scroll2"> -->
    </div><!-- divបិទIP4 -->
</body>
</div><!-- divបិទIP1 -->
</html>
