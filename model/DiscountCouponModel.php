<?php

require_once('../dao/DbObject.php');
require_once('../util/FunctionUtil.php');

class DiscountCoupon extends DbObject
{
	public $discount_coupon_id;
	public $shop_id;
	public $discount_coupon_code;
	public $expiry_date;
	public $percentage_value;
	public $cash_value;	
	function __construct(){
		self::$table_name = "discountcoupon";
		$this->discount_coupon_code = FunctionalUtility::generatepassword();
	}
	
	public function addDiscountCoupon(){
			self::add_to_db("ADD_DISCOUNT_COUPON",$this->shop_id,
										   $this->discount_coupon_code,
										   $this->expiry_date,
										   $this->percentage_value,
										   $this->	cash_value
			);
			global $db;
			$this->discount_coupon_id = $db->insert_id();
	}
	
}

?>