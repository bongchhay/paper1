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
  $sql="insert into `tbl_payment_old`(StudenID,ClassID,ManyMonths,Payment,StartDate,EndDate,Discount,PaymentDate,InvoiceNumber,Other,PayBack)values('$StudenID','$ClassID','$ManyMonths','$Payment','$StartDate','$EndDate','$Discount','$PaymentDate','$InvoiceNumber','$Other','$PayBack')";
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
  $sql="insert into `datayear`(StudenID,ClassID,ManyMonths,Payment,StartDate,EndDate,Discount,PaymentDate,InvoiceNumber,Other,PayBack)values('$StudenID','$ClassID','$ManyMonths','$Payment','$StartDate','$EndDate','$Discount','$PaymentDate','$InvoiceNumber','$Other','$PayBack')";
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
  $sql="insert into `tbl_payment`(StudenID,ClassID,ManyMonths,Payment,StartDate,EndDate,Discount,PaymentDate,InvoiceNumber,Other,PayBack)values('$StudenID','$ClassID','$ManyMonths','$Payment','$StartDate','$EndDate','$Discount','$PaymentDate','$InvoiceNumber','$Other','$PayBack')";
$result=mysqli_query($con,$sql);
    if($result){
        // echo"successfully";
        header('location:Payment.php');
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
    <title>user</title>
  </head>

  <body class="body1">
  <div Class="titel1"><!-- <ក្បាលលើ>បើក -->
  <center>
    <h1 class="font1">联华学校</h1>
    <h1 class="font2">សូមបញ្ចូលទិន្នន័យបង់ប្រាក់ដោយប្រុងប្រយ័ត្ន</h1>
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
    <form method="post">
    
    <div class="IP5">
    <!-- <label >InvoiceNumber</label> -->
    <input type="text" class="form-control" name="InvoiceNumber" value=<?php echo $PV;?>>
    <input type="number" class="form-control" name="PayBack" value=<?php echo '0 $';?>>
  </div><!-- បិទ<div class="IP5"> -->
  <div class="IP6"></div>
  
<p class="font3">លេខវិក័យបត្រ: NVP<?php echo $PV;?></p>
    <div class="form-group">
    <label >Studen_S(ID)</label>
    <input type="number" class="form-control"
    placeholder="Enter S(Number)" name="StudenID">
  </div>

  <div class="form-group">
    <label >Class_C(ID)</label>
    <input type="number" class="form-control"
    placeholder="Enter C(Number)" name="ClassID">
  </div>

  <div class="form-group">
    <label >ManyMonths</label>
    <input type="number" class="form-control"
    placeholder="Enter your ManyMonths" name="ManyMonths">
  </div>

  <div class="form-group">
    <label >Discount</label>
    <input type="text" class="form-control"
    placeholder="Enter your Discount" name="Discount">
  </div>

  <div class="form-group">
    <label >Payment</label>
    <input type="number" class="form-control"
    placeholder="Enter your Payment" name="Payment">
  </div>

  <div class="form-group">
    <label >StartDate</label>
    <input type="date" class="form-control"
    placeholder="Enter your StartDate" name="StartDate">
  </div>

 <div class="form-group">
    <label >EndDate</label>
    <input type="date" class="form-control"
    placeholder="Enter your EndDate" name="EndDate">
  </div>

  <div class="form-group">
    <label >PaymentDate</label>
    <input type="text" class="form-control"
    placeholder="Enter your PaymentDate" name="PaymentDate" value=<?php echo $date2;?>>
  </div>

  <div class="form-group">
    <label >Other</label>
    <input type="text" class="form-control"
    placeholder="Enter your Other" name="Other">
  </div>
 
</div>
</th>
</tr>
<tr>
  <th>
<a href="Payment.php" class="text-light"><input name="btnsearch" class="btn btn-danger" style="width:623px;height:50px;" value="BACK"></a>
<button type="submit" class="btn btn-primary" name="submit" style="width:622px;height:50px;" onclick="alert('AddPayment Successfully!!!')">Add</button>
</th>
</tr>
</form>
</div>
</table>
</div><!-- <class="add1">បិទ -->
 </body>
</html>