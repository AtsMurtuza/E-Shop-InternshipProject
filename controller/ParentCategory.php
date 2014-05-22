<?php
	require_once('../model/CategoryModel.php');
	$cat = new Category();
	$result = $cat->getParentCategory();
	
	echo json_encode($result);
?>
