<?php

require_once('../dao/DbObject.php');
require_once('../util/FunctionUtil.php');

class OrderDetail extends DbObject
{
	public $orderDetail_id;
	public $product_id;
	public $price;
	public $quantity;
	public $discount;
	public $ship_date;
	public $order_id;
	
	function __construct(){
		self::$table_name = "orderDetail";
	}
	
	public function addOrderDetail(){
		self::add_to_db("ADD_ORDER_DETAIL",$this->product_id,
										   $this->price,
										   $this->quantity,
										   $this->discount,
										   $this->ship_date,
										   $this->order_id											
		);
	
	}
	
}

?>