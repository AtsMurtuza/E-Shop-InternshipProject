<?php
	require_once('../model/DealsModel.php');
	$deal = new Deals();
	$deal->expiry_date = $_POST["expirydate"];
	$deal->get= $_POST["getvalue"];
	$deal->buy = $_POST["buyvalue"];
	$deal->shop_id = 1;
	$deal->product_id = 1;
	$deal->addDeal();
?>
