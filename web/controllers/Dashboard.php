<?php 
	require_once('../config.php');
	require_once('../db/DBConnection.php');
	require_once('CheckLogin.php');

	$view = "dashboard.php";

	$data = array();
	if(isset($_SESSION['user_id'])){
		$id = $_SESSION['user_id'];

		$sql = "select * FROM appointments a,schedule s where a.schedule_id = s.id and user_id = $id";

		$result = $conn->query($sql);	

		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
		    	$temp = array(
		    		'id' => $row['id'],
		    		'schedule_id' => $row['schedule_id'],
		    		'reason' => $row['reason'],
		    		'status' => $row['status_a'],
		    		'date' => $row['date'],
		    		'start_time' => $row['start_time'],
		    		'end_time' => $row['end_time']
		    	);
		    	array_push($data, $temp);
			}
		}
	}

	require_once '../index.php';

 ?>