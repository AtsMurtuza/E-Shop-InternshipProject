<?php

require_once('../dao/DbObject.php');
require_once('../util/FunctionUtil.php');

class Category extends DbObject
{
	public $category_id;
	public $parent_id;
	public $category_name;
	public $category_description;
	public $active_bool;
	
	function __construct(){
		self::$table_name = "category";
	}
	
	public function addCategory(){
			self::add_to_db("ADD_CATEGORY",$this->parent_id,
										   $this->category_name,
										   $this->category_description,
										   $this->active_bool
			);
			global $db;
			$this->category_id = $db->insert_id();
	}
	
	public static function selectCategory(){
		$result = self::find_all("CATEGORY_LIST");
		return $result;
	}
	
	public function checkCategory(){
		$result = self::find_by_id("CHECK_CATEGORY",$this->category_name);
		if(!empty($result)){
			return true;
		}else{
			return false;
		}
	}
	
	public function getParentCategory(){
		$result = self::find_all("FIND_PARENT");
		return $result;
	}
	
	public function getCategoryList(){
		$result = self::find_all("FIND_PARENT");
		return $result;
	}
}

?>