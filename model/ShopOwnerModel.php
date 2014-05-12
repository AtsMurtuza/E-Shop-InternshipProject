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
	
}

?>