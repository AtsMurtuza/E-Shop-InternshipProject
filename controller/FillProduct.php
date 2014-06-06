<?php
	require_once('../model/ProductModel.php');
	$prod = new Product();
	$result = $prod->getProducts();
	
	echo json_encode($result);
	
?>
