<?php
	require_once('../model/CategoryModel.php');
	$result = Category::selectCategory();
	foreach($result as $row)
	{
		echo "<option value='{$row->category_id}'>",$row->category_name,"</option>";
	}
?>