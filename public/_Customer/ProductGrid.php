<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php');?>
		<!--Page Specific -->
		<style>
			.navbar-inverse{
			background-color:#428BCA;
			border-color:#428BCA;
			}
			.navbar-inverse .navbar-brand {
				color:white;
				font-weight:700;
			}
			.panel-success 
			{
				border-color:#398439;
			}
			
			.panel-success > .panel-heading{
				background-color:#47A447;
				color:white;
				
			}
			.navbar-inverse .navbar-brand:hover, .navbar-inverse .navbar-brand:focus {
				color:whitesmoke;
			}
			.navbar-inverse .navbar-toggle:focus{
				background-color:#428BCA;
			}
			.navbar-inverse .navbar-toggle:hover
			{
				background-color:white;
			}
			.navbar-inverse .navbar-nav > li > a {
				color:white;
			}
			.badge{
				background-color:green;
			}
		</style>
	</head>
	<body class="container-fluid">
	
	<div class="col-xs-2" style="height:600px">
		<div class="panel panel-success">
			<div class="panel-heading" style="height:100%;width:100%;text-align:center;">
				<h1 style="margin-top:220px"><i class="fa fa-shopping-cart"></i></h1>
				<br>
				<h4>Your Cart is Empty</h4>
			</div>
		</div>
	</div>
	<div class="col-xs-8" id="prodgrid">
		
	</div>
	<div class="col-xs-2 panel-group" style="padding:0;height:600px">
		<div class="panel panel-success" style="margin:0px;max-height:150px;width:100%;">	
			<div class="panel-heading" style="text-align:center;">
				<h2 style="padding-bottom:5px;"><i class="fa fa-shopping-cart"></i></h2>
				<a id="x1" href="#" style="color:white"><h4>Your Cart has 3 Items</h4></a>
			</div>
		</div>
		<div id="x2" dim-vis="2" class="panel panel-success" style="margin:0px;width:100%;max-height:480px;overflow-y:auto;">
			<table  class="table table-bordered table-hover" style="text-align:center;">
				
			</table>
		</div>
	</div>
	<div id="test"></div>
	</body>
	<?php require_once('_js-include.php');?>
	<!--Page Specific JS -->
	<script type="text/javascript">
		function productjson(data)
		{
			var obj = jQuery.parseJSON(data);
			jQuery.each(obj,function(key,value){
				
				var imgdiv = $("<div>").html('<div class="col-xs-12"><a href="#" class="thumbnail"><img src="../images/ProductImages/'+ value.product_id +'/'+ value.product_id +'.jpg" style="min-height:250px;max-height:250px;"></a></div>');
				var namediv = $("<div>").html('<div class="col-xs-12"  style="margin-top:-15px;border-bottom:1px solid gray"><h3><a href="#">'+ value.product_name +'</a></h3></div>');
				var price = $("<h4>").html('<h4>Price : <i class="fa fa-rupee"></i>&nbsp;'+ value.unit_price +'</h4>');
				if(value.unit_in_stock > 0 )
				{
					var available = $("<h4>").html('<h5 class="text-success">Available In Stock</h5>');
				}
				else
				{
					var available = $("<h4>").html('<h5 class="text-danger">Out Of Stock</h5>');
				}
				var rating = $("<h4>").html('<h4 style="color:green"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i><i class="fa fa-star-o"></i></h4>');
			
				var prodbody = $("<div>");
				prodbody.html("<div class='panel-body'>" + imgdiv.html() + namediv.html() + "<div class='col-xs-12'>" + price.html() + available.html() + rating.html() + '</div><div class="col-xs-6"><button class="btn btn-success"><i class="fa fa-shopping-cart"></i>&nbsp;Add To Cart</button></div><div class="col-xs-6"><button class="btn btn-info"><i class="fa fa-magic"></i>&nbsp;Wishlist</button></div></div>');
			
				var fullprod = $("<div>");
				fullprod.html("<div class='col-xs-4'><div class='panel panel-primary'>" + prodbody.html() + "</div></div>");
			
				$("#prodgrid").append(fullprod);
			
			});
			
		
		}
		function togcart(){
			if($('#x2').attr('dim-vis')=='1')
			{
				$('#x2').slideDown('slow');
				$('#x2').attr('dim-vis','2');
			}
			else
			{
				$('#x2').slideUp('slow');
				$('#x2').attr('dim-vis','1');
			}
		}
		$('#x1').click(function (){
			togcart();
		});
		$(document).ready(function (){
			var ats = $.post("../../controller/FillProduct.php",function(data){
				productjson(data);
			});
			$('#x1').click();
		});
		
	</script>
    </html>