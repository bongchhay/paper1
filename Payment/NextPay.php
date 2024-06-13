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
       $sql="Select * from `invoicenumber`";
       $result=mysqli_query($con,$sql);
       if($result){
        while($row=mysqli_fetch_assoc($result)){
          $PV=$row['ID'];
        }
       }
  ?>

<!-- add -->
<?php
include '../connect_SPL/connect_SPL.php';
if(isset($_POST['submit'])){
  $StudenID=$_POST['StudenID'];
  $ClassID=$_POST['ClassID'];
  $ManyMonths=$_POST['ManyMonths'];
  $Payment=$_POST['Payment'];
  $StartDate=$_POST['StartDate'];
  $EndDate=$_POST['EndDate'];
  $Discount=$_POST['Discount'];
  $PaymentDate=$_POST['PaymentDate'];
  $InvoiceNumber=$_POST['InvoiceNumber'];
  $Other=$_POST['Other'];
  $PayBack=$_POST['PayBack'];
  $BackMonth=$_POST['BackMonth'];
  $sql="insert into `tbl_payment_old`(StudenID,ClassID,ManyMonths,Payment,StartDate,EndDate,Discount,PaymentDate,InvoiceNumber,Other,PayBack,BackMonth)values('$StudenID','$ClassID','$ManyMonths','$Payment','$StartDate','$EndDate','$Discount','$PaymentDate','$InvoiceNumber','$Other','$PayBack','$BackMonth')";
$result=mysqli_query($con,$sql);
//     if($result){
//         // echo"successfully";
//         header('location:teacher.php');
//     }
//     else{
//     die(mysqli_error($con));
// }
}
?>
<!-- update -->
<?php
include '../connect_SPL/connect_SPL.php';
$id=$_GET['updateid'];
$sql="Select * from `tbl_payment` where ID=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
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
$PayBack=$row['PayBack'];

if(isset($_POST['submit'])){
  $StudenID=$_POST['StudenID'];
  $ClassID=$_POST['ClassID'];
  $ManyMonths=$_POST['ManyMonths'];
  $Payment=$_POST['Payment'];
  $StartDate=$_POST['StartDate'];
  $EndDate=$_POST['EndDate'];
  $Discount=$_POST['Discount'];
  $PaymentDate=$_POST['PaymentDate'];
  $InvoiceNumber=$_POST['InvoiceNumber'];
  $Other=$_POST['Other'];
  $PayBack=$_POST['PayBack'];
  $BackMonth=$_POST['BackMonth'];
  $sql="insert into `datayear`(StudenID,ClassID,ManyMonths,Payment,StartDate,EndDate,Discount,PaymentDate,InvoiceNumber,Other,PayBack,BackMonth)values('$StudenID','$ClassID','$ManyMonths','$Payment','$StartDate','$EndDate','$Discount','$PaymentDate','$InvoiceNumber','$Other','$PayBack','$BackMonth')";
  $result=mysqli_query($con,$sql);
}

if(isset($_POST['submit'])){
  $StudenID=$_POST['StudenID'];
  $ClassID=$_POST['ClassID'];
  $ManyMonths=$_POST['ManyMonths'];
  $Payment=$_POST['Payment'];
  $StartDate=$_POST['StartDate'];
  $EndDate=$_POST['EndDate'];
  $Discount=$_POST['Discount'];
  $PaymentDate=$_POST['PaymentDate'];
  $InvoiceNumber=$_POST['InvoiceNumber'];
  $Other=$_POST['Other'];
  $PayBack=$_POST['PayBack'];
  $BackMonth=$_POST['BackMonth'];
  $sql="insert into `tbl_payment`(StudenID,ClassID,ManyMonths,Payment,StartDate,EndDate,Discount,PaymentDate,InvoiceNumber,Other,PayBack,BackMonth)values('$StudenID','$ClassID','$ManyMonths','$Payment','$StartDate','$EndDate','$Discount','$PaymentDate','$InvoiceNumber','$Other','$PayBack','$BackMonth')";
  $result=mysqli_query($con,$sql);
//លុប
    if($result){
      $sql_r="delete from `tbl_payment` where ID=$id";
      mysqli_query($con,$sql_r);

        // echo"successfully";
        header('location:Payment.php');
      // echo'
      // <table border="2" width="100%">
      // <tr>
      // <th>
      // <center>
      // <h1>successfully</h1>
      // <a href="teacher.php" class="text-light"><input name="btnsearch" class="btn btn-danger" style="width:500px;height:50px;" value="BACK"></a>
      // </center>
      // </th>
      // </tr>
      
      // </table>
      // ';
    }
    else{
    die(mysqli_error($con));
}
}
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
    <h1 class="font1">联华学校</h1>
    <h1 class="font2">សូមកែប្រែទិន្នន័យបង់ប្រាក់ដោយប្រុងប្រយ័ត្ន</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->
  <div class="add1"><!-- <class="add1">បើក -->
  <table border="2" width="1258px" style="border-collapse:collapse;" class="table1">
                <tr>
    <th>
    <?php 
      date_default_timezone_set('Asia/Kolkata');
      $date2 =  date ("Y/m/d") ;
      ?>
    <div class="container">

    <?php
  echo '
    <form method="post">

    <div class="IP5">
    <!-- <label >InvoiceNumber</label> -->
    <input type="text" class="form-control" name="InvoiceNumber" value='.$PV.' >
  </div><!-- បិទ<div class="IP5"> -->
  <div class="IP6"></div>
  
<p class="font3">លេខវិក័យបត្រ: NVP'.$PV.'</p>

    <div class="form-group">
    <label >Studen_S(ID)</label>
    <input type="number" class="form-control"
    placeholder="Enter S(Number)" name="StudenID" autocomplete="off" value='.$StudenID.'>
  </div>

  <div class="form-group">
    <label >Class_C(ID)</label>
    <input type="number" class="form-control"
    placeholder="Enter C(Number)" name="ClassID" autocomplete="off" value='.$ClassID.'>
  </div>

  <div class="form-group">
    <label >ManyMonths</label>
    <input type="number" class="form-control"
    placeholder="Enter your ManyMonths" name="ManyMonths" autocomplete="off" >
  </div>

  <div class="form-group">
    <label >Discount</label>
    <input type="number" class="form-control"
    placeholder="Enter your Discount" name="Discount" autocomplete="off" >
  </div>

  <div class="form-group">
    <label >Payment</label>
    <input type="number" class="form-control"
    placeholder="Enter your Payment" name="Payment" autocomplete="off" >
  </div>

  <div class="form-group">
    <label >StartDate</label>
    <input type="date" class="form-control"
    placeholder="Enter your StartDate" name="StartDate" autocomplete="off" value='.$EndDate.'>
  </div>

  <div class="form-group">
    <label >EndDate</label>
    <input type="date" class="form-control"
    placeholder="Enter your EndDate" name="EndDate" autocomplete="off" >
  </div>

  <div class="form-group">
    <label >PaymentDate</label>
    <input type="text" class="form-control"
    placeholder="Enter your PaymentDate" name="PaymentDate" autocomplete="off" value='.$date2.'>
  </div>

  <div class="form-group">
  <label >PayBack</label>
  <input type="text" class="form-control"
  placeholder="Enter your PayBack" name="PayBack" autocomplete="off" value='.$PayBack.'>
</div>

<div class="form-group">
<label >BackMonth</label>
<input type="text" class="form-control"
placeholder="Enter your BackMonth" name="BackMonth" autocomplete="off" >
</div>

  <div class="form-group">
    <label >Other</label>
    <input type="text" class="form-control"
    placeholder="Enter your Other" name="Other" autocomplete="off" >
  </div>

</select>
</div>
</th>
</tr>
<tr>
  <th>
  <a href="Payment.php" class="text-light"><input name="btnsearch" class="btn btn-danger" style="width:622px;height:50px;" value="BACK"></a>
 
  <button type="submit" class="btn btn-primary" name="submit" style="width:623px;height:50px ;">NextPay</button> 
 
</th>
</tr>
</form>
';
?>
</div>
</table>
</div><!-- <class="add1">បិទ -->
 </body>

</html>