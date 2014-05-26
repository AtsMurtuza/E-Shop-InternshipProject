<?php
	require_once('../model/UserModel.php');
	require_once('../model/ShopModel.php');
	require_once('../model/ShopOwnerModel.php');
	require_once('../model/ShopSessionModel.php');
	
	$shopowner = new Supplier();
	$user = new User();
	$user->user_email = $_POST["Email"];
	$user = $user->getUserByEmail();
	
	if(isset($user->user_password_hash) && $user->user_password_hash==$_POST["Password"])
	{
		$shop = new Shop();
		$shop->shop_supplier_id = $user->user_id;
		$shop = $shop->getShopByOwner();
		
		if(isset($shop->shop_id))
		{
			global $shop_session;
			$shop_session->login($shop->shop_id,$user->user_email);
			echo 'true';
		}
		else
		{
			echo 'false';
		}
	}
	else
	{
		echo 'false';
	}
	
	
?>