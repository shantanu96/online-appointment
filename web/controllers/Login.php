<?php
	require_once('../config.php');
	require_once('../db/DBConnection.php');

	$email = $_POST['email'];
	$pass = $_POST['pass'];


	$sql = "select * FROM users where email='$email' and password='$pass'";

	$result = $conn->query($sql);	
	

	if($result->num_rows > 0){

		while($row = $result->fetch_assoc()) {
		    $_SESSION['user_id'] = $row['id'];
		    $_SESSION['email'] = $row['email'];
		}
		echo "success";
	}else{
		echo "fail";
	}
	
 ?>