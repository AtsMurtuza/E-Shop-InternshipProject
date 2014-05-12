<?php

require_once('../dao/DbObject.php');
require_once('../util/FunctionUtil.php');

class Shop extends DbObject
{
	public $shop_id;
	public $shop_name;
	public $shop_supplier_id;
	public $shop_activation_hash;
	function __construct(){
		self::$table_name = "tb_shop";
		$this->shop_id=0;
	}
}

?>