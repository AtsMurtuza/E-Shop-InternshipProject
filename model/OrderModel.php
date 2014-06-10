<?php

require_once('../dao/DbObject.php');
require_once('../util/FunctionUtil.php');

class Order extends DbObject
{
	public $order_id;
	public $cutomer_id;
	public $payment_id;
	public $shipper_id;
	public $tax_order;
	public $time_stap;
	public $transaction_status;
	public $payment_date;
	public $total;
	
	function __construct(){
		self::$table_name = "orders";
	}
	
	public function addOrder(){
		self::add_to_db("ADD_ORDER",$this->cutomer_id,
									$this->payment_id,
									$this->shipper_id,
									$this->tax_order,
									$this->time_stap,
									$this->transaction_status,
									$this->payment_date,
									$this->total);
		global $db;
		$this->order_id = $db->insert_id();
	}	
	public function getOrderForShop(){
		$result = self::search_db("GET_ORDER",$this->shipper_id);
		return $result;
		
	}
}

?>