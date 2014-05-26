<?php
require_once('../util/FunctionUtil.php');

class ShopSession
{
	public $shop_id;
	public $shop_owner_email;
	public $logged_in;
	function __construct(){
		session_start();
		$this->checklogin();
	}
	public function checklogin(){
		if(isset($_SESSION['shop_owner_email']))
		{
			$this->shop_id = $_SESSION['shop_id'];
			$this->shop_owner_email = $_SESSION['shop_owner_email'];
			$this->logged_in=true;
		}
		else
		{
			unset($this->shop_id);
			unset($this->shop_owner_email);
			$this->logged_in=false;
		}
	}
	
	public function login($shopid,$email)
	{
		$_SESSION['shop_id']=$shopid;
		$_SESSION['shop_owner_email']=$email;
		$this->checklogin();
		FunctionalUtility::write_log("Shop/".$this->shop_id , "Shop Owner Has Logged In With ",$this->shop_owner_email);	
	}
	public function is_logged_in(){
		return $this->logged_in;
	}
	
	public function logout(){
		FunctionalUtility::write_log("Shop/".$this->shop_id , "Shop Owner Has Logged OUT With ",$this->shop_owner_email);	
		unset($this->shop_id);
		unset($this->shop_owner_email);
		unset($this->logged_in);
		unset($_SESSION);
	}
}
$shop_session = new ShopSession();

?>