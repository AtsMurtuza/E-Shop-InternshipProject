<?php

require_once('../dao/DbObject.php');
require_once('../util/FunctionUtil.php');

class GiftCoupon extends DbObject
{
	public $gift_coupon_id;
	public $shop_id;
	public $gift_coupon_code;
	public $expiry_date;
	public $value;
	
	function __construct(){
		self::$table_name = "giftcoupon";
		$this->gift_coupon_code = FunctionalUtility::generatepassword();
	}
	
	public function addGiftCoupon(){
			self::add_to_db("ADD_GIFT_COUPON",$this->shop_id,
										   $this->gift_coupon_code,
										   $this->expiry_date,
										   $this->value
			);
			global $db;
			$this->gift_coupon_id = $db->insert_id();
	}
	
}

?>