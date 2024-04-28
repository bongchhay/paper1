<?php
include '../connect_SPL/connect_SPL.php';
       $sql="Select * from `invoicenumber_on`";
       $result=mysqli_query($con,$sql);
       if($result){
        while($row=mysqli_fetch_assoc($result)){
          $PV=$row['ID'];
        }
       }
  ?>
<?php
  // Create database connection
  include '../connect_SPL/connect_SPL.php';

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        // Get text
        $InvoiceNumber = mysqli_real_escape_string($con, $_POST['InvoiceNumber']);
        $StudantID = mysqli_real_escape_string($con, $_POST['StudantID']);
        $ClassID = mysqli_real_escape_string($con, $_POST['ClassID']);
        $PayMonthly = mysqli_real_escape_string($con, $_POST['PayMonthly']);
        $PhoneNumber = mysqli_real_escape_string($con, $_POST['PhoneNumber']);
        $text = mysqli_real_escape_string($con, $_POST['text']);
        // image file directory
        $target = "images/".basename($image);
        // Get text
       $DateClickToPay = mysqli_real_escape_string($con, $_POST['DateClickToPay']);
        $sql = "INSERT INTO studentpay_old (InvoiceNumber,StudantID,ClassID,PayMonthly,PhoneNumber,text,image,DateClickToPay) VALUES ('$InvoiceNumber','$StudantID','$ClassID','$PayMonthly','$PhoneNumber','$text', '$image', '$DateClickToPay')";
        // execute query
        mysqli_query($con, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
        }else{
                $msg = "Failed to upload image";
        }
        header('location:StudentPay.php');
  }
?>
<?php
  // Create database connection
  include '../connect_SPL/connect_SPL.php';

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        // Get text
        $InvoiceNumber = mysqli_real_escape_string($con, $_POST['InvoiceNumber']);
        $StudantID = mysqli_real_escape_string($con, $_POST['StudantID']);
        $ClassID = mysqli_real_escape_string($con, $_POST['ClassID']);
        $PayMonthly = mysqli_real_escape_string($con, $_POST['PayMonthly']);
        $PhoneNumber = mysqli_real_escape_string($con, $_POST['PhoneNumber']);
        $text = mysqli_real_escape_string($con, $_POST['text']);
        // image file directory
        $target = "images/".basename($image);
        // Get text
       $DateClickToPay = mysqli_real_escape_string($con, $_POST['DateClickToPay']);
        $sql = "INSERT INTO studentpay (InvoiceNumber,StudantID,ClassID,PayMonthly,PhoneNumber,text,image,DateClickToPay) VALUES ('$InvoiceNumber','$StudantID','$ClassID','$PayMonthly','$PhoneNumber','$text', '$image', '$DateClickToPay')";
        // execute query
        mysqli_query($con, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
        }else{
                $msg = "Failed to upload image";
        }
        header('location:StudentPay.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="teat.css">
        <script src="teat.js"></script>
        <title>联华学校</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<script src="sweetalert.min.js"></script>


<style type="text/css">
   /* #content{
        width: 50%;
        margin: 20px auto;
        border: 1px solid #cbcbcb;
   } */
   form{
        width: 50%;
        margin: 20px auto;
   }
   form div{
        margin-top: 5px;
   }
   #img_div{
        width: 80%;
        padding: 5px;
        margin: 15px auto;
        border: 1px solid #cbcbcb;
   }
   #img_div:after{
        content: "";
        display: block;
        clear: both;
   }
   img{
        float: left;
        margin: 5px;
        width: 325px;
        height: 400px;
   }
</style>
</head>

<div class="IP1">
<body class="body1">
<div Class="titel1"><!-- <ក្បាលលើ>បើក -->
  <center>
    <h1 class="font1">联华学校</h1>
    <h1 class="font2">បង់ថ្លៃសិក្សាតាមអ៊ីនធឺណែត(ចំណាំបង់ម្ដងបានមួយខែ)</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->
  <div class="IP3">
  <center>
  <a href="../Home_Student/Home_Student.php"><button class="button1" type="button" >Home</button></a>
      <a href="../TuitionFees/ViewTuitionFees_student.php"><button class="button1" type="button" >មើលតម្លែសិក្សា</button></a><br>
<a href="../StudentPay/ViewStudentPay.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:400px;height:50px;" value="ចុចមើលវិក័យប័ត្រ"></a>
<a href="../Student/V_student.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:400px;height:50px;" value="ចុចមើលលេខសម្គាល់សិស្ស"></a>
<a href="../View_Class/student_view_class.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:400px;height:50px;" value="ចុចមើលវិក័យប័ត្រ"></a>
</center>
</div><!-- divបិទIP3 -->
<div class="IP7">            
  <div class="IP5">
    <div class="IP6">
      <?php 
      date_default_timezone_set('Asia/Kolkata');
      $date2 =  date ("Y/m/d") ;
      ?>
  <form method="POST" action="StudentPay.php" enctype="multipart/form-data">
  <div class="IP10">
    <!-- <label >InvoiceNumber</label> -->
    <input type="text" class="form-control" style="width:200px;" name="InvoiceNumber" value=<?php echo $PV;?>>
  </div><!-- បិទ<div class="IP10"> -->
  <div class="IP11"></div><!-- បិទ<div class="IP11"> -->
  <p class="font3">លេខវិក័យបត្រ:NVOP<?php echo $PV;?></p>
       <div class="form-group">
       <label style="width:1245px;">StudantID/លេខម្គាល់សិស្ស:</label>
        <input type="number" style="width:1245px;" placeholder="Enter your Gender" name="StudantID">
        </div>

        <div>
        <label style="width:1245px;">ClassID/លេខសម្គាល់ថ្នាក់រៀន(មិនមែនលេខបន្ទប់ថ្នាក់រៀនទេ):</label>
        <input type="number" style="width:1245px;" placeholder="Enter your ClassID" name="ClassID">
        </div>

        <div>
        <label style="width:1245px;">បង់សម្រាប់ថ្ងៃណាខែណាឆ្នាំណា:</label>
        <input type="date" style="width:1245px;" name="PayMonthly">
        </div>

        <div>
        <label style="width:1245px;">លេខទូរស័ព្ទ:</label>
        <input type="text" style="width:1245px;" placeholder="Enter your PhoneNumber" name="PhoneNumber">
        </div>

        <input type="hidden" name="size" value="1000000" >
        <div>
        <label style="width:1245px;"> បង្កោះរូបវិក័យបត្រធនាគារ:</label>
          <input class="btn btn-primary" style="width:1245px;height:50px;" type="file" name="image">
        </div>
  
        <div>
        <label style="width:1245px;">ថ្ងៃចុចបង់លុយ:</label>
        <input type="text" style="width:1245px;" name="DateClickToPay" value=<?php echo $date2;?>>
        <div>

        <div>
        <label style="width:1245px;">ផ្សេងៗ:</label>
      <textarea 
        id="text" 
        cols="167" 
        rows="10" 
        name="text" 
        placeholder="ផ្សេងៗ...!"></textarea>
        </div>

        <div>
        <button class="btn btn-primary" type="submit" name="upload" style="width:1245px;height:50px;" onclick="alert('អរគុណចំពោះការបង់លុយថ្លៃសិក្សា!!!')">POST</button>
        </div>
  </form>
       <div class="IP8"><div><!-- divបិទIP8_បិទថ្ងៃចុចបង់កុំម៉ោយកែកើត -->
  </div><!-- divបិទIP6 -->
  </div><!-- divបិទIP5 -->
</div>
</div><!-- divបិទIP7 -->
</body>
</html>