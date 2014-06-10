<?php

require_once('../dao/DbObject.php');
require_once('../util/FunctionUtil.php');
require_once('../model/CategoryModel.php');

class Product extends DbObject
{
	public $product_id;
	public $product_name;
	public $category_id;
	public $product_description;
	public $supplier_id;
	public $unit_price;
	public $product_mrp;
	public $available_size;
	public $available_color;
	public $weight;
	public $unit_in_stock;
	public $discount;
	public $unit_in_order;
	public $product_ranking;
	public $shop_name;
	
	
	function __construct(){
		self::$table_name = "product";
		$this->unit_in_order = 0;
		$this->picture_id = 0;
		$this->product_ranking = 0;
	}
	
	function addProduct(){
		
		self::add_to_db("ADD_PRODUCT",$this->category_id,
									  $this->product_name,
									  $this->product_description,
									  $this->supplier_id,
									  $this->unit_price,
									  $this->product_mrp,
									  $this->available_size,
									  $this->available_color,
									  $this->discount,
									  $this->weight,
									  $this->unit_in_stock,
									  $this->unit_in_order,
									  $this->product_ranking
		);	
		global $db;
		$this->product_id = $db->insert_id();
		
		
	}
	
	function getProducts(){
		$result = self::find_all("PRODUCT_LIST");
		return $result;
	
	}
	
}

?>