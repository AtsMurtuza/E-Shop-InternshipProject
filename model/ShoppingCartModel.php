<?php
defined('DS')?null : define('DS','/');
defined('SITE_ROOT')?null:define('SITE_ROOT',DS.'wamp'.DS.'www'.DS.'E-Shop-InternshipProject');

require_once(SITE_ROOT.'/util/FunctionUtil.php');
require_once(SITE_ROOT.'/dao/DbObject.php');
class ShoppingCart extends DbObject
{
	public $user_id;
	public $product_id;
	public $product_name;
	public $quantity;
	
	public function addCart(){
		self::add_to_db("SAVE_CART",$this->user_id,$this->product_id,$this->quantity);
	}
	public function showCart()
	{
		$result= self::search_db("SHOW_CART",$this->user_id);
		return $result;
	}
	public function updateCart()
	{
		self::update_to_db("UPDATE_CART",$this->quantity,$this->user_id,$this->product_id);
	}
	public function deleteCart()
	{
		self::delete_from_db("DELETE_CART",$this->user_id,$this->product_id);
	}
}
?>