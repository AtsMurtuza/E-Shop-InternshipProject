<?php
	require_once('../model/ShopModel.php');

	$shop = new Shop();
	$shop->shop_name = $_POST["ShopName"];
	
	$result = $shop->checkShopName();
	
	if(!$result == true)
	{
		echo 'true';
	}
	else
	{
		echo 'false';
	}
	
?>