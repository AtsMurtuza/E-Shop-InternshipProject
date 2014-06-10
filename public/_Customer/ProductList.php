<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php');?>
		<!--Page Specific -->
		
	</head>
	<body class="container-fluid">
	
	<div class="col-xs-8">
		<div class="col-xs-12" id="prodgrid">
		</div>
	</div>
	<?php require_once('ShoppingCart.php');?>
	<input type="hidden" id="testname">
	</body>
	<?php require_once('_js-include.php');?>
	<!--Page Specific JS -->
	<script type="text/javascript" src="../js/pages/ShoppingCart.js"></script>
    <script type="text/javascript" src="../js/pages/ProductList.js"></script>
	</html>