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

<?php
include '../connect_SPL/connect_SPL.php';
if(isset($_POST['submit'])){
  $InvoiceNumber=$_POST['InvoiceNumber'];
  $sql="insert into `invoicenumber`(InvoiceNumber)values('$InvoiceNumber')";
$result=mysqli_query($con,$sql);
    if($result){
        // echo"successfully";
        header('location:add_payment.php');
    }
    else{
      // header('location:add_payment.php');
    die(mysqli_error($con));
}
}
?>
<!-- ID next pay -->
<?php
include '../connect_SPL/connect_SPL.php';
if(isset($_POST['next'])){
  $InvoiceNumber=$_POST['InvoiceNumber'];
  $sql="insert into `invoicenumber`(InvoiceNumber)values('$InvoiceNumber')";
$result=mysqli_query($con,$sql);
    if($result){
        // echo"successfully";
        header('location:PayOldStudent.php');
    }
    else{
      // header('location:add_payment.php');
    die(mysqli_error($con));
}
}
?>

<script src="sweetalert.min.js"></script>
<script>
    function submitForm(form) {
        swal({
            title: "Are you sure?",
            text: "ច្បាស់ទេថាអ្នកចង់លុប?",
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
  <div Class="titel1"><!-- <ក្បាលលើ>បើក -->
  <center>
    <h1 class="font1">联华学校</h1>
    <h1 class="font2">តារ៉ាងទិន្នន័យបង់ប្រាក់</h1>
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
<!-- hhhhhhh -->
<div class="IP8"><a href="../Viwe_Payment/Viwe_Payment.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-danger" style="width:90px;height:50px;" value="View"></a></div>
<div class="IP9">
<form method="post">
    <div class="IP7"><input type="number" class="form-control" name="InvoiceNumber" autocomplete="off" ></div>
    <button type="submit" class="btn btn-primary" name="submit" style="width:575px;height:50px;">ចុះឈ្មោះសិស្សថ្មី</button>
    </form>
  </div><!-- divបិទIP9 -->
  <div class="IP10">
  <form method="post">
    <div class="IP7"><input type="number" class="form-control" name="InvoiceNumber" autocomplete="off" ></div>
    <button type="submit" class="btn btn-primary" name="next" style="width:560px;height:50px;">បង់លុយអោយសិស្សចាស់</button>
    </form>
  </div><!-- divបិទIP10 -->
</center>
</div><!-- divបិទIP3 -->


<div class="IP4">
<div class="scroll">
<table border="2" >
  <thead>
    <tr>
    <!-- <th scope="col"><center><input type="text" class="search-input" style="width:50px;text-align: center;" placeholder="ID"></center></th> -->
    <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="លេខវិក័យបត្រ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:100px;text-align: center;" placeholder="IDសិស្ស"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="IDថ្នាក់រៀន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="ចំនូនខែ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ចំនូនលុយ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:180px;text-align: center;" placeholder="ថ្ងៃចូលរៀន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ថ្ងែបញ្ជប់"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ចំណាំ" list='scripts'></center></th>
      <datalist id='scripts'>
      <option value='មិនទាន់ដល់ថ្ងែបង់'>
      <option value='ដល់ថ្ងែបង់ប្រាក់'>
</datalist>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="បញ្ចុះតម្លៃ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ថ្ងៃមកបង់"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:100px;text-align: center;" placeholder="ផ្សេងៗ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:350px;text-align: center;" placeholder="កែប្រែ/លុប"></center></th>
    </tr>
  </thead>
  <tbody>

    <?php
       $sql="Select * from `tbl_payment`";
       $result=mysqli_query($con,$sql);
       if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['ID'];
          $StudenID=$row['StudenID'];
          $ClassID=$row['ClassID'];
          $ManyMonths=$row['ManyMonths'];
          $Payment=$row['Payment'];
          $StartDate=$row['StartDate'];
          $EndDate=$row['EndDate'];
          $Discount=$row['Discount'];
          $PaymentDate=$row['PaymentDate'];
          $InvoiceNumber=$row['InvoiceNumber'];
          $Other=$row['Other'];
          date_default_timezone_set('Asia/Kolkata');
          $date2 =  date ("Y/m/d") ;
          $dateTimestamp1 = strtotime($EndDate);
          $dateTimestamp2 = strtotime($date2);
          
          if ($dateTimestamp1 > $dateTimestamp2){//（ដល់ថ្ងៃបង់ <= មិនទាន់ដល់  ）
            echo'<tr>
            <td style="text-align: center;">NVP'.$InvoiceNumber.'</td>
            <td style="text-align: center;">S'.$StudenID.'</td>
            <td style="text-align: center;">C'.$ClassID.'</td>
            <td style="text-align: center;">'.$ManyMonths.' ខែ</td>
            <td style="text-align: center;">'.$Payment.' $</td>
            <td style="text-align: center;">'.$StartDate.'</td>
            <td style="text-align: center;">'.$EndDate.'</td>
            <td style="text-align: center;">មិនទាន់ដល់ថ្ងែបង់</td>
            <td style="text-align: center;">'.$Discount.' $</td>
            <td style="text-align: center;">'.$PaymentDate.'</td>
            <td style="text-align: center;">'.$Other.'</td>
            <td style="text-align: center;">
            <form method="POST" action="delete.php?deleteid='.$id.'" onsubmit="return submitForm(this);">
            <button class="btn btn-primary"><a href="../Invoices/Invoices.php?updateid='.$id.'" class="text-light">Invoices</a></button>
            <button class="btn btn-primary"><a href="Update.php?updateid='.$id.'" class="text-light">update</a></button>
      <button type="submit" class="btn btn-danger">Delete</button>
  </form></td>
            </tr>';
          }
          else{
            echo'<tr>
            <td style="text-align: center;">NVP'.$InvoiceNumber.'</td>
            <td style="text-align: center;">S'.$StudenID.'</td>
            <td style="text-align: center;">C'.$ClassID.'</td>
            <td style="text-align: center;">'.$ManyMonths.' ខែ</td>
            <td style="text-align: center;">'.$Payment.' $</td>
            <td style="text-align: center;">'.$StartDate.'</td>
            <td style="text-align: center;"><div class="fbtn btn-danger">'.$EndDate.'</div></td>
            <td style="text-align: center;"><div class="fbtn btn-danger">ដល់ថ្ងែបង់ប្រាក់</div></td>
            <td style="text-align: center;">'.$Discount.' $</td>
            <td style="text-align: center;">'.$PaymentDate.'</td>
            <td style="text-align: center;">'.$Other.'</td>
            <td style="text-align: center;">
            <form method="POST" action="delete.php?deleteid='.$id.'" onsubmit="return submitForm(this);">
            <button class="btn btn-primary"><a href="../Invoices/Invoices.php?updateid='.$id.'" class="text-light">Invoices</a></button>
            <button class="btn btn-primary"><a href="Update.php?updateid='.$id.'" class="text-light">update</a></button>
            <button type="submit" class="btn btn-danger">Delete</button>
  </form></td>
            </tr>';
          }


  
        }
       }
  ?>
  </tbody>
</table>




</div>
</table>








</div><!-- class="scroll -->
      </div><!-- divបិទIP4 -->

      </body>
</div><!-- divបិទIP1 -->
</html>