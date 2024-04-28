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
        <title>ViewStudentPay_old</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<script src="sweetalert.min.js"></script>
<script>
    function submitForm(form) {
        swal({
          title: "បញ្ជាក់៖លុបហើយមិនអាចទាញមកវិញបានទេ។",
            text: "ច្បាស់ទេថាអ្នកពិតជាចង់លុបវាចេញ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then(function (isOkay) {
            if (isOkay) {
                form.submit();
            }
        });
        return false;
    }
</script>
<div class="IP1">
<body class="body1">
    <div class="titel1">
      <center>
        <h1 class="font1">联华学校</h1>
        <h1 class="font2">ទិន្នន័យចាស់ៗរបស់អ្នកបង់ថ្លៃសិក្សាតាមអ៊ីនធឺណែត</h1>
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
<a href="../StudentPay/T_ViewStudentPay.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:623px;height:50px;" value="មើលទិន្នន័យថ្មីដែលពេញលេញ"></a>
<a href="../StudentPay/ConfirmStudentPay.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:623px;height:50px;" value="មើលទិន្នន័យថ្មីដែលមិនពេញលេញ"></a>
      </center>
      </div><!-- divបិទIP3 -->    
    <div class="IP9">
    <div class="scroll2">
    <table border="2" width="100%" style="border-collapse:collapse;">
  <thead>
    <tr>
    <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="លេខវិក័យប័ត្រ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="លេខសម្គាល់សិស្ស"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="លេខសម្គាល់ថ្នាក់រៀន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="បង់សម្រាប់ខែ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="លេខទូរស័ព្ទ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="វិក័យប័ត្រធនាគារ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="ផ្សេងៗ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="ចំណាំ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="លុប"></center></th>
    </tr>
  </thead>
  <tbody>
    <?php
       $sql="Select * from `studentpay_old`";
       $result=mysqli_query($con,$sql);
       if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['ID'];
          $InvoiceNumber=$row['InvoiceNumber'];
          $StudantID=$row['StudantID'];
          $ClassID=$row['ClassID'];
          $PayMonthly=$row['PayMonthly'];
          $PhoneNumber=$row['PhoneNumber'];
          $text=$row['text'];
          echo'<tr>
          <td style="text-align: center;">VOP'.$InvoiceNumber.'</td>
          <td style="text-align: center;">'.$StudantID.'</td>
          <td style="text-align: center;">'.$ClassID.'</td>
          <td style="text-align: center;">'.$PayMonthly.'</td>
          <td style="text-align: center;">'.$PhoneNumber.'</td>
          <td><center><img src="images/'.$row['image'].'" width="250" height="300"></center></td>
          <td style="text-align: center;">'.$text.'</td>          
          <td style="text-align: center;">បានបង់ប្រាក់ហើយ</td>
          <td style="text-align: center;">
          <form method="POST" action="delete_old.php?deleteid='.$id.'" onsubmit="return submitForm(this);">
    <button type="submit" class="btn btn-danger">Delete</button>
</form></td>
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
