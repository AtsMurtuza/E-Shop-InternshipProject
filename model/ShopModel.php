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
	function addShop()
	{
		$result = self::add_to_db("ADD_SHOP",$this->shop_name,$this->shop_supplier_id,$this->shop_activation_hash);
		FunctionalUtility::write_log("Shop/".$this->shop_supplier_id , "Shop Created","The Shop is Created with name ".$this->shop_name);		
		global $db;
		$this->shop_id = $db->insert_id();
	}
	function activateShop()
	{
		$result = $this->getShopByActivation();
		if($result!=false && isset($result->shop_supplier_id))
		{
			$result->changeActivationStatus();
			return $result->shop_supplier_id;
		}
		else
		{
			return false;
		}
	}
	function checkShopName()
	{
		$result = self::find_by_id("SEARCH_SHOPNAME",$this->shop_name);
		if(isset($result->shop_name) && $result->shop_name==$this->shop_name)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function changeActivationStatus()
	{
		$result = self::update_to_db("UPDATE_SHOP_ACTIVATION",$this->shop_activation_hash);
		FunctionalUtility::write_log("Shop/".$this->shop_id , "Shop Activated","The Shop is Activated with name ".$this->shop_name);		
	}
	function getShopByActivation()
	{
		$result = self::find_by_id("SEARCH_SHOP_BY_ACTIVATION",$this->shop_activation_hash);
		if(isset($result->shop_name) && $result->shop_supplier_id==$this->shop_supplier_id)
		{
			return $result;
		}
		return false;
	}
	function getShopByOwner()
	{
		$result = self::find_by_id("SEARCH_SHOP_BY_OWNER",$this->shop_supplier_id);
		if(isset($result->shop_name) && $result->shop_supplier_id==$this->shop_supplier_id)
		{
			return $result;
		}
		return $this;
	}
	function getShopById()
	{
		$result = self::find_by_id("SEARCH_SHOPID",$this->shop_id);
		if(isset($result->shop_name) && $result->shop_id==$this->shop_id)
		{
			return $result;
		}
		return $this;
	}
}

?>