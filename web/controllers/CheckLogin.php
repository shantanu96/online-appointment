<?php
	if(!isset($_SESSION['user_id'])){
		header('Location:http://localhost/petdoctor/web/controllers/Home.php');
	}
 ?>