<?php
include '../connect_SPL/connect_SPL.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `studentpay_old` where ID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:ViewStudentPay_old.php');
    }
}

?>