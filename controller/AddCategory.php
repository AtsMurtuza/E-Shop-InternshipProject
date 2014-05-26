<?php
	require_once('../model/CategoryModel.php');
	$cat = new Category();
	
	$cat->category_name = $_POST["category_name"];
	if($cat->checkCategory()){
		echo "false";
	}
	else{
		echo "true";
	}
	
	
		
?>
