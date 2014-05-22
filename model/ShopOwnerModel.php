<?php

require_once('../dao/DbObject.php');
require_once('../util/FunctionUtil.php');

class Supplier extends DbObject
{
	public $supplier_id;
	public $supplier_name;
	
	function __construct(){
		self::$table_name = "tb_supplier";
		$this->supplier_id=0;
	}
	function addSupplier()
	{
		if(!$this->checkSupplier())
		{
			$result = self::add_to_db("ADD_SUPPLIER",$this->supplier_id,$this->supplier_name);
			FunctionalUtility::write_log("ShopOwner/".$this->supplier_id , "Shop Owner Created","The Shop Owner is Created with name ".$this->supplier_name);		
		}
	}
	function checkSupplier()
	{
		$result = self::find_by_id("SEARCH_SUPPLIER_ID",$this->supplier_id);
		if(isset($result->supplier_id) && $result->supplier_id==$this->supplier_id)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>