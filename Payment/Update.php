<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="teat.css">
        <script src="teat.js"></script>
        <title>联华学校</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
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
$BackMonth=$row['BackMonth'];

if(isset($_POST['submit'])){
  $StudenID=$_POST['StudenID'];
  $ClassID=$_POST['ClassID'];
  $ManyMonths=$_POST['ManyMonths'];
  $Payment=$_POST['Payment'];
  $StartDate=$_POST['StartDate'];
  $EndDate=$_POST['EndDate'];
  $Discount=$_POST['Discount'];
  $PaymentDay=$_POST['PaymentDate'];
  $InvoiceNumber=$_POST['InvoiceNumber'];
  $Other=$_POST['Other'];
  $PayBack=$_POST['PayBack'];
  $BackMonth=$_POST['BackMonth'];
    // $to_day=$_POST['to_day'];
    $sql="update `datayear` set ID=$id,StudenID='$StudenID',ClassID='$ClassID',ManyMonths='$ManyMonths',Payment='$Payment',StartDate='$StartDate',EndDate='$EndDate',Discount='$Discount',PaymentDate='$PaymentDate',InvoiceNumber='$InvoiceNumber',Other='$Other',PayBack='$PayBack',BackMonth='$BackMonth' where ID=$id";
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
  $PaymentDay=$_POST['PaymentDate'];
  $InvoiceNumber=$_POST['InvoiceNumber'];
  $Other=$_POST['Other'];
  $PayBack=$_POST['PayBack'];
  $BackMonth=$_POST['BackMonth'];
    // $to_day=$_POST['to_day'];
    $sql="update `tbl_payment` set ID=$id,StudenID='$StudenID',ClassID='$ClassID',ManyMonths='$ManyMonths',Payment='$Payment',StartDate='$StartDate',EndDate='$EndDate',Discount='$Discount',PaymentDate='$PaymentDate',InvoiceNumber='$InvoiceNumber',Other='$Other',PayBack='$PayBack',BackMonth='$BackMonth' where ID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
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
    <div class="container">
    <form method="post">

    <p class="font3">លេខវិក័យបត្រ: PV<?php echo $InvoiceNumber;?></p>
    <div class="form-group">
    <label >Studen_S(ID)</label>
    <input type="number" class="form-control"
    placeholder="Enter S(Number)" name="StudenID" autocomplete="off" value=<?php echo $StudenID;?>>
  </div>

  <div class="form-group">
    <label >Class_C(ID)</label>
    <input type="number" class="form-control"
    placeholder="Enter C(Number)" name="ClassID" autocomplete="off" value=<?php echo $ClassID;?>>
  </div>

  <div class="form-group">
    <label >ManyMonths</label>
    <input type="number" class="form-control"
    placeholder="Enter your ManyMonths" name="ManyMonths" autocomplete="off" value=<?php echo $ManyMonths;?>>
  </div>

  <div class="form-group">
    <label >Payment</label>
    <input type="number" class="form-control"
    placeholder="Enter your Payment" name="Payment" autocomplete="off" value=<?php echo $Payment;?>>
  </div>

  <div class="form-group">
    <label >StartDate</label>
    <input type="date" class="form-control"
    placeholder="Enter your StartDate" name="StartDate" autocomplete="off" value=<?php echo $StartDate;?>>
  </div>

  <div class="form-group">
    <label >EndDate</label>
    <input type="date" class="form-control"
    placeholder="Enter your EndDate" name="EndDate" autocomplete="off" value=<?php echo $EndDate;?>>
  </div>

  <div class="form-group">
    <label >Discount</label>
    <input type="text" class="form-control"
    placeholder="Enter your Discount" name="Discount" autocomplete="off" value=<?php echo $Discount;?>>
  </div>

  <div class="form-group">
    <label >PayBack</label>
    <input type="data" class="form-control"
    placeholder="Enter your PayBack" name="PayBack" autocomplete="off" value=<?php echo $PayBack;?>>
  </div>

  <div class="form-group">
    <label >BackMonth</label>
    <input type="text" class="form-control"
    placeholder="Enter your BackMonth" name="BackMonth" autocomplete="off" value=<?php echo $BackMonth;?>>
  </div>

  <div class="form-group">
    <label >PaymentDate</label>
    <input type="data" class="form-control"
    placeholder="Enter your PaymentDate" name="PaymentDate" autocomplete="off" value=<?php echo $PaymentDate;?>>
  </div>

  <div class="IP5">
    <input type="text" class="form-control" placeholder="Enter your InvoiceNumber" name="InvoiceNumber" autocomplete="off" value=<?php echo $InvoiceNumber;?>>
  </div>
  <div class="IP6"></div>

  <div class="form-group">
    <label >Other</label>
    <input type="text" class="form-control"
    placeholder="Enter your Other" name="Other" autocomplete="off" value=<?php echo $Other;?>>
  </div>

</select>
</div>
</th>
</tr>
<tr>
  <th>
  <a href="Payment.php" class="text-light"><input name="btnsearch" class="btn btn-danger" style="width:622px;height:50px;" value="BACK"></a>
  <button type="submit" class="btn btn-primary" name="submit" style="width:623px;height:50px ;" onclick="alert('Update Successfully!!!')">update</button>  
</th>
</tr>
</form>
</div>
</table>
</div><!-- <class="add1">បិទ -->
 </body>

</html>