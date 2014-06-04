<?php
	require_once('../model/DiscountCouponModel.php');
	$disc = new DiscountCoupon();
	$disc->expiry_date = $_POST["expirydate"];
	$disc->percentage_value = $_POST["percentagevalue"];
	$disc->cash_value = $_POST["cashvalue"];
	$disc->shop_id = 1;
	$disc->addDiscountCoupon();
?>
