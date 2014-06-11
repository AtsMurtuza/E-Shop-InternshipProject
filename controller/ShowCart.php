<?php
	require_once('../model/ShoppingCartModel.php');
	//require_once('../model/CustomerSessionModel.php');
	$cart = new ShoppingCart();
	$cart->user_id=1;
	$result = $cart->showCart();
	echo json_encode($result);
?>
