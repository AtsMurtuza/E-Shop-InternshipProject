<?php
	require_once('../model/ShoppingCartModel.php');
	//require_once('../model/CustomerSessionModel.php');
	$cart = new ShoppingCart();
	$cart->user_id=1;
	$cart->product_id=$_POST['product_id'];
	$cart->quantity=$_POST['quantity'];
	$cart->updateCart();
?>
