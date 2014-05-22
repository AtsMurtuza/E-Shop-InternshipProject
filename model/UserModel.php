<?php

require_once('../dao/DbObject.php');
require_once('../util/FunctionUtil.php');

class User extends DbObject
{
	public $user_id;
	public $user_name;
	public $user_password_hash;
	public $user_email;
	public $user_active;
	public $user_activation_hash;
	public $user_password_reset_hash;
	public $user_password_reset_timestamp;
	public $user_failed_logins;
	
	function __construct(){
		self::$table_name = "tb_user";
		$this->user_id = 0;
		$this->user_active = 0;
	}
	function getUserByEmail()
	{
		$result = self::find_by_id("SEARCH_USER_EMAIL",$this->user_email);		
		if($result!=false && isset($result->user_id))
		{
			return $result;
		}
		return $this;
	}
	function addUser($newPassword,$newActivation)
	{
		$this->user_password_hash = md5($newPassword);
		$this->user_activation_hash = md5($newActivation);
		$result = self::add_to_db("ADD_USER",$this->user_email,$this->user_password_hash,$this->user_activation_hash);
		global $db;
		$this->user_id = $db->insert_id();
		FunctionalUtility::write_log("User/".$this->user_id , "User Created","The User is Created with email ".$this->user_email);		
	}
	function activateUser()
	{
		$result = $this->getUserByActivation();
		if($result!=false && isset($result->user_id))
		{
			$result->changeActivationStatus();
			return true;
		}
		else
		{
			return false;
		}
	}
	function changeActivationStatus()
	{
		$result = self::update_to_db("UPDATE_USER_ACTIVATION",$this->user_activation_hash);
		FunctionalUtility::write_log("User/".$this->user_id , "User Activated","The User is Activated with email ".$this->user_email);		
	}
	function getUserByActivation()
	{
		$result = self::find_by_id("SEARCH_USER_BY_ACTIVATION",$this->user_activation_hash);
		if(isset($result->user_email) && $result->user_activation_hash == $this->user_activation_hash)
		{
			return $result;
		}
		return false;
	}
}

?>