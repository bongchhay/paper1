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
<div class="IP1">
<body class="body1">
  <div Class="titel1"><!-- <ក្បាលលើ>បើក -->
  <center>
    <h1 class="font1">联华学校</h1>
    <h1 class="font2">តារ៉ាងឈ្មោះសិស្ស</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->

  <div class="IP3">
  <center>
  <a href="../Home_Student/Home_Student.php"><button class="button1" type="button" >Home</button></a>
  <a href="../TuitionFees/ViewTuitionFees_student.php"><button class="button1" type="button" >មើលតម្លែសិក្សា</button></a>
</center>
</div><!-- divបិទIP3 -->


<div class="IP4">
<table border="2" width="100%" style="border-collapse:collapse;"><!-- <table>001 -->
                <tr><!-- <tr>002 -->
                <th colspan="3"><!-- <th>002 -->
                <center>
                  <a href="../StudentPay/StudentPay.php" class="text-light"><input name="btnsearch" type="submit" class="btn btn-primary" style="width:1247px;height:50px;" value="Back"></a>

</center>
                 </th><!-- <th>002 -->
                </tr><!-- <tr>002 -->
                  <tr><!-- <tr>001 -->
                  <th colspan="3"><!-- <th>001 -->
                  <div class="scroll">
<table border="2" width="100%" style="border-collapse:collapse;">
  <thead>
    <tr>
    <th scope="col"><center><input type="text" class="search-input" style="width:50px;text-align: center;" placeholder="ID"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:150px;text-align: center;" placeholder="ឈ្មោះខ្មែរ"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="ឈ្មោះចិន"></center></th>
      <th scope="col"><center><input type="text" class="search-input" style="width:110px;text-align: center;" placeholder="ភេទ"></center></th>
    </tr>
  </thead>
  <tbody>
    <?php
       $sql="Select * from `tbl_student`";
       $result=mysqli_query($con,$sql);
       if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['ID'];
          $KhmerName=$row['S_KhmerName'];
          $ChineseName=$row['S_ChineseName'];
          $Gender=$row['S_Gender'];
          echo'<tr>
          <td style="text-align: center;">S'.$id.'</td>
          <td style="text-align: center;">'.$KhmerName.'</td>
          <td style="text-align: center;">'.$ChineseName.'</td>
          <td style="text-align: center;">'.$Gender.'</td>
          </tr>';
        }
       }
  ?>
  </tbody>
</table>
</div><!-- class="scroll -->
      </th><!-- <th>001 -->
      </tr><!-- <tr>001 -->
</table><!-- <table>001 -->
      </div><!-- divបិទIP4 -->
</body>
</div><!-- divបិទIP1 -->
</html>