<?php
	require_once('../model/UserModel.php');
	require_once('../model/ShopModel.php');
	require_once('../model/ShopOwnerModel.php');
	require_once('../util/FunctionUtil.php');
	require_once('../model/MailModel.php');
	
	$user = new User();
	$user->user_email = $_POST["ShopEmail"];
	$user = $user->getUserByEmail();
	$newActivation = FunctionalUtility::generatePassword().FunctionalUtility::generatePassword();
	$shop_owner = new Supplier();
	$newPassword=FunctionalUtility::generatePassword();
	if($user->user_id==0)
	{
		$user->addUser($newPassword,$newActivation);
		$shop_owner->supplier_id = $user->user_id;
		$shop_owner->supplier_name = $_POST["ShopOwnerName"];
		$shop_owner->addSupplier();
	}
	$shop = new Shop();
	$shop->shop_name = $_POST["ShopName"];
	$shop->shop_supplier_id = $shop_owner->supplier_id;
	$shop->shop_activation_hash=md5($newActivation);
	$shop->addShop();
	
	$newMail = new MailModel();
	$sendAddress = array();
	$sendAddress[] = $user->user_email;
	$msgbody="<h1>Welcome to E-Shop,</h1> <hr> <p>Your default password set is {$newPassword}. <br>Your activation link is as follows<br> <a href='localhost/Backend-Ecom/public/_Shops/Activate.php?key={$newActivation}'> ACTIVATE </a></p><hr>";
	$msgbodyalt="HTML not visible.\n\n Your default password is {$newPassword} \n\n go to localhost/Backend-Ecom/public/_Shops/Activate.php?key={$newActivation} to activate your account ";
	$mailresult = $newMail->sendMailData($sendAddress,"Welcome to E-Shop",$msgbody,$msgbodyalt);
	if($mailresult == true)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
	
?>