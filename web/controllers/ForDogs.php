<?php 
	require_once('../config.php');
	require_once('../db/DBConnection.php');
	require_once('CheckLogin.php');

	$view = "fordogs.php";

	

	$data = [];

	// if(isset($_GET["dog_products"]) && $_GET["dog_products"] == 1){
		$sql = "select * from products where animal_category='dog'";
		$result = $conn->query($sql);	

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
		    	$temp = array(
		    		'id' => $row['id'],
		    		'product_category' => $row['product_category'],
		    		'name' => $row['name'],
		    		'price' => $row['price'],
		    		'description' => $row['description']
		    	);
		    	array_push($data, $temp);
			}
		}
	// }
	
	require_once '../index.php';
 ?>