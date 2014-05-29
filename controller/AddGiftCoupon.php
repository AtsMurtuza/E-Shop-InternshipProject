<?php
	require_once('../model/GiftCouponModel.php');
	$gift = new GiftCoupon();
	$gift->expiry_date = $_POST["expirydate"];
	$gift->value = $_POST["cashvalue"];
	$gift->shop_id = 1;
	$gift->addGiftCoupon();
?>
