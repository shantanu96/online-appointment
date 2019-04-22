<?php 
	require_once('../config.php');
	require_once('../db/DBConnection.php');
	require_once('CheckLogin.php');

	$view = "schedule.php";
	

	//getting schedule json to display on calendar
	if(isset($_GET['getSchedule']) && $_GET['getSchedule'] == 1){
		$sql = "SELECT * FROM schedule";
		$result = $conn->query($sql);

		$data = [];
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$temp = array(
		    		'title' => $row['status'],
		    		'start' => $row['date']." ".date("H:i:s",strtotime($row['start_time'])),
		    		'end' => $row['date']." ".date("H:i:s",strtotime($row['end_time'])),
		    		'color' => $row['status'] == 'available'? 'green' : 'red'
		    	);
		    	array_push($data, $temp);
		    }
		} else {
		    echo "0 results";
		}

		print_r(json_encode($data));
		exit();
	}

	//schedule appointment on given date
	if(isset($_GET['setAppointment']) && $_GET['setAppointment'] == 1){
		$date = date("Y-m-d",strtotime($_GET["start"]));
		$start = date("h a",strtotime($_GET["start"]));
		$end = date("h a",strtotime($_GET["end"]));

		$sql = "UPDATE schedule SET status='booked' WHERE date='$date' and start_time='$start' and end_time='$end'";
		echo $sql;	

		if($conn->query($sql) === TRUE){
			echo "Appointment made successfully.";
			 
		}else{
			echo "Appointment unsuccessful";
		}

		$sql1 = "SELECT id from schedule  WHERE date='$date' and start_time='$start' and end_time='$end'";
		
		
		$schedule_id = $conn->query($sql1)->fetch_assoc()['id'];

		$user_id = $_SESSION['user_id'];
		$sql2 = "insert into appointments(schedule_id,user_id,reason) values($schedule_id,$user_id,'abc')";
		if($conn->query($sql2) === TRUE){
			echo "Appointment added successfully.";
			 
		}else{
			echo "Appointment not added";
		}

		exit();
	}



	require_once '../index.php';
	
 ?>