<?php
define('HOST', 'localhost');
define('USER', 'id11312221_abhi');
define('PASSWORD', 'abhiabhi');
define('DB', 'id11312221_testing');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$userID = $_POST['user_id'];
	$userPassword = $_POST['user_password'];
	if($userID == '' || $userPassword == ''){
		echo "fail";
		exit;
	}
	
	$con = mysqli_connect(HOST, USER, PASSWORD, DB) or die("Unable to Connect");
	
	$query = "SELECT * FROM users WHERE email = '$userID' AND password = '$userPassword'";
	$result = mysqli_query($con, $query);
	$data = mysqli_fetch_array($result);
	if(isset($data)){
		echo "login";
	}else{
		echo "fail";
	}
	mysqli_close($con);
}
?>