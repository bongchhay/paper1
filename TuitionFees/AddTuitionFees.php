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
        $image_text = mysqli_real_escape_string($con, $_POST['text']);

        // image file directory
        $target = "images/".basename($image);

        $sql = "INSERT INTO images (image, text) VALUES ('$image', '$image_text')";
        // execute query
        mysqli_query($con, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
        }else{
                $msg = "Failed to upload image";
        }
        header('location:ViewTuitionFees.php');
  }
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
        <title>联华学校</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
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
    <h1 class="font2">តារ៉ាងតម្លៃសិក្សា</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->
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
<!-- hhhhhhh -->
<a href="ViewTuitionFees.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:1247px;height:50px;" value="View"></a>
</center>
</div><!-- divបិទIP3 -->
<div class="IP7">            
<div class="Ka1"> 
  <?php
    while ($row = mysqli_fetch_array($result)) {
      $id=$row['ID'];
      echo "<div id='img_div'>";
      echo "<center>";
      echo "<p>".$row['text']."</p>";
        echo "<img src='images/".$row['image']."'>";
        echo'
          <form method="POST" action="delete.php?deleteid='.$id.'" onsubmit="return submitForm(this);">
          <button class="btn btn-primary"><a href="Update.php?updateid='.$id.'" class="text-light">update</a></button>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>';
      echo "</center>";
      echo "</div>";
    }
  ?>
  </div><!-- class="scroll1" -->
  <div class="IP5">
    <div class="IP6">
  <form method="POST" action="AddTuitionFees.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000" >
        <div>
          <input class="btn btn-primary" style="width:795px;height:50px;" type="file" name="image">
        </div>
        <div>
      <textarea 
        id="text" 
        cols="105" 
        rows="11" 
        name="text" 
        placeholder="Say something about this image..."></textarea>
        </div>
        <div>
        <button class="btn btn-primary" type="submit" name="upload" style="width:795px;height:50px;">POST</button>
        </div>
  </form>
  </div><!-- divបិទIP6 -->
  </div><!-- divបិទIP5 -->
</div>
</div><!-- divបិទIP7 -->
</body>

</html>