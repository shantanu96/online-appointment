<?php 
	require_once('../config.php');
	
	unset($_SESSION['user_id']);
	unset($_SESSION['email']);
	session_destroy();

	header('Location:http://localhost/petdoctor/web/controllers/Home.php');
 ?>