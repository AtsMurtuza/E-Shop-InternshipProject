<?php
	require_once('../model/OrderModel.php');
	$ord = new Order();
	$ord->shipper_id = 1;
	
	$result = $ord->getOrderForShop();
	echo json_encode($result);
?>
