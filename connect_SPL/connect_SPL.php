<?php
$con=new mysqli('localhost','root','','studenspayment');// ផ្ជាប់SQL
if(!$con){
    // echo"Connection succesfull";
    die(mysqli_error($con));
}
// else{
    // die(mysqli_error($con));
// }
?>