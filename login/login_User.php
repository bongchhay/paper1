<?php 
session_start(); 
include '../connect_SPL/connect_SPL.php';


if (isset($_POST['UserName']) && isset($_POST['Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['UserName']);
	$pass = validate($_POST['Password']);

	if (empty($uname)) {
		header("Location: index.php?error=UserName is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE UserName='$uname' AND password='$pass'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['UserName'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['UserName'] = $row['UserName'];
            	$_SESSION['Name'] = $row['Name'];
            	$_SESSION['ID'] = $row['ID'];
            	header("Location: ../user_display/user_display.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect Username or Password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User Name or Password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}