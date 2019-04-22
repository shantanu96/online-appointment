<?php 
	require_once('../config.php');
	require_once('../db/DBConnection.php');

	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$pass = $_POST['pass'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];


	$sql = "insert into users(full_name,email,moble_number,password,gender,address) values('$full_name','$email','$mobile','$pass','$gender','$address')";

	if($conn->query($sql) === TRUE){
		echo "success";
	}else{
		echo "fail";
	}
 ?>