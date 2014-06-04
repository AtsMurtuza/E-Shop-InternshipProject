<?php

require_once('../dao/DbObject.php');
require_once('../util/FunctionUtil.php');

class Deals extends DbObject
{
	public $deal_id;
	public $shop_id;
	public $product_id;
	public $expiry_date;
	public $buy;
	public $get;

	function __construct(){
		self::$table_name = "deals";

	}
	
	public function addDeal(){
			self::add_to_db("ADD_DEALS",$this->shop_id,
										   $this->product_id,
										   $this->expiry_date,
										   $this->buy,
										   $this->get
										 
			);
			global $db;
			$this->deal_id = $db->insert_id();
	}
	
}

?>