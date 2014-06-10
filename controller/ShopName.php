<?php
	require_once('../model/ShopModel.php');
	$shop = new Shop();
	$shop->shop_id = $_POST['shop_id'];
	$result = $shop->getShopById();
	
	echo $result->shop_name;
?>
