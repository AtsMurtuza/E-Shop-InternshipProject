<?php
	require_once('../model/ProductModel.php');
	$product = new Product();
	$product->product_name = $_POST["ProductName"];
	$product->category_id = $_POST["CategorySelect"];
	$product->product_description = $_POST["ProductDescription"];
	$product->supplier_id = 0;
	$product->unit_price = $_POST["UnitPrice"];
	$product->product_mrp = $_POST["MRP"];
	$product->available_size = $_POST["Size"];
	$product->available_color = $_POST["color"];
	$product->discount = $_POST["Discount"];
	$product->weight = $_POST["Weight"];
	$product->unit_in_stock = $_POST["Stock"];
	
	$product->addProduct();
	echo $product->product_id; 
		
	$info = pathinfo($_FILES['file']['name']);
	$ext = $info['extension']; 
	$newname = $product->product_id.".".$ext; 
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	
	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 500000)
	&& in_array($ext, $allowedExts)) {
	  if ($_FILES["file"]["error"] > 0) {
		echo "Error: " . $_FILES["file"]["error"] . "<br>";
	  } else {
	  if(!is_dir("../ProductImages/".$product->supplier_id."/".$product->product_id)){
			mkdir("../ProductImages/".$product->supplier_id."/".$product->product_id);
		}
		$target = '../ProductImages/'.$product->supplier_id.'/'.$product->product_id.'/'.$newname;
		echo $target;
		move_uploaded_file( $_FILES['file']['tmp_name'], $target);
	  }
	} else {
	  echo "Invalid file";
	}

	
?>
