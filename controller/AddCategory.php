<?php
	require_once('../model/CategoryModel.php');
	$cat = new Category();
	$cat->category_name = $_POST["CategoryName"];
	$cat->category_description = $_POST["CategoryDescription"];
	$cat->parent_id = $_POST["ParentID"];
	
	$cat->addCategory();
?>
