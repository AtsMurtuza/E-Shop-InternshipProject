<?php
	
	require_once('../model/UserModel.php');
	require_once('../model/ShopModel.php');
	require_once('../model/MailModel.php');

	$user = new User();
	$shop = new Shop();
	$shop->shop_activation_hash = md5($_REQUEST["key"]);
	$shop->user_activation_hash = md5($_REQUEST["key"]);
	//echo $shop->Activation_URL;
	$user->activateUser();
	$shop_owner_id = $shop->activateShop();
	//echo $shop_owner_id;
	if($shop_owner_id!=false)
	{
		$user = $user->getUserById($shop_owner_id);
		if(isset($user->user_email))
		{
		$newMail = new MailModel();
		$sendAddress = array();
		$sendAddress[] = $user->user_email;
		$msgbody="<h1 style='text-align:center'>E-Shop,</h1> <hr><p style='text-align:center'>Your account has been Activated.Login to the account to continue.</p><hr>";
		$msgbodyalt="HTML not visible. Your account is now active please login to complete the details.";
		$mailresult = $newMail->sendMailData($sendAddress,"Your E-Shop Account is Active",$msgbody,$msgbodyalt);
		$activation= "true";
		}
		else
		{
			$activation= "false";
		}
	}
	else
	{
		$activation= "false";
	}
	FunctionalUtility::redirect_to("../public/_Shops/ActivateShop.php?activation=".$activation);
?>