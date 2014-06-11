<html>  
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php');?>
		<link href="../css/photobox.css" rel="stylesheet">
		<link href="../css/photoboxstyles.css" rel="stylesheet">
		<!--Page Specific -->
	</head>
	<body class="container-fluid">
	<div class="col-xs-7" id="prodgrid">	
	</div>
	
	<?php require_once('ShoppingCart.php');?>
	<?php require_once('ProductModelView.php');?>
	
	<?php require_once('_js-include.php');?>
	<!--Page Specific JS -->
	<script type="text/javascript" src="../js/pages/ShoppingCart.js"></script>
	<script type="text/javascript" src="../js/pages/ProductGrid.js"></script>
	<script type="text/javascript" src="../js/pages/ProductModal.js"></script>
	<script type="text/javascript" src="../js/pages/jquery.photobox.js"></script>
	
    </html>