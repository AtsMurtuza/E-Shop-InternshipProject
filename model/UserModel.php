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
	
}

?>