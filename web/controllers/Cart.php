<?php 
	require_once('../config.php');
	require_once('../db/DBConnection.php');
	require_once('CheckLogin.php');

	$view = "cart.php";

	if(isset($_GET['product_id']) && $_GET['action'] == 'insert'){
		$product_id = $_GET['product_id'];
		
		$sql = "select * from products where id=$product_id";
			$result = $conn->query($sql);	
		if(!isset($_SESSION['cart_items']['product_data'])){
			$_SESSION['cart_items']['product_data'] = array();
		}

		if($result->num_rows > 0){
			
			while($row = $result->fetch_assoc()) {
		    	$temp = array(
		    		'id' => $row['id'],
		    		'animal_category' => $row['animal_category'],
		    		'product_category' => $row['product_category'],
		    		'name' => $row['name'],
		    		'price' => $row['price'],
		    		'description' => $row['description']
		    	);

		    	array_push($_SESSION['cart_items']['product_data'], $temp);
			}
		}

		print_r($_SESSION);

	}else if(isset($_GET['product_id']) && $_GET['action'] == 'remove'){
		foreach ($_SESSION['cart_items']['product_data'] as $count => $product) {
			if($product['id'] == $_GET['product_id'])
				unset($_SESSION['cart_items']['product_data'][$count]);
		}
	}else{
		require '../index.php';
	}
 ?>