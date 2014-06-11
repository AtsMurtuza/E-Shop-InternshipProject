<?php
	require_once('../model/ProductModel.php');
	$prod = new Product();
	$result = $prod->getProductById($_POST['productid']);
	echo json_encode($result);
?>