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
<<<<<<< HEAD
	
	<div class="col-xs-8" id="PageBody">
=======
	<div class="col-xs-8">
	
>>>>>>> 5d3b0811b28ff9dcefb76770d6b47c8c34e3bdcf
		<div class="col-xs-4">
			<div class="panel panel-primary ">
				<div class="panel-body productdraggable">
					<div class="col-xs-12">
						<a class="thumbnail" href="#">
							<img src="../images/casio1.jpeg" style="max-height:250px;">
						</a>
					</div>
					<div class="col-xs-12" style="margin-top:-15px;border-bottom:1px solid gray">
						<h4><a href=""></a></h3>
					</div>
					<div class="col-xs-12">
						<h4>Price : <i class="fa fa-rupee"></i>&nbsp;6000</h4>
						<h5 class="text-success">Available In Stock</h5>
						<h4 style="color:green;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i><i class="fa fa-star-o"></i></h4>
					</div>
					<div class="col-xs-6">
						<button class="btn btn-success"><i class="fa fa-shopping-cart"></i>&nbsp;Add To Cart</button>
					</div>
					<div class="col-xs-6">
						<button class="btn btn-info"><i class="fa fa-magic"></i>&nbsp;Wishlist</button>
					</div>
				</div>
			</div>
		</div>
		
<!--		<div class="col-xs-4">
			<div class="panel panel-primary">
				<div class="panel-body productdraggable">
					<div class="col-xs-12">
						<a class="thumbnail" href="#">
							<img src="../images/casio1.jpeg" style="max-height:250px;">
						</a>
					</div>
					<div class="col-xs-12" style="margin-top:-15px;border-bottom:1px solid gray">
						<h4><a href="">Casio Watch</a></h3>
					</div>
					<div class="col-xs-12">
						<h4>Price : <i class="fa fa-rupee"></i>&nbsp;6000</h4>
						<h5 class="text-danger">Out Of Stock</h5>
						<h4 style="color:orange;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h4>
					</div>
					<div class="col-xs-6">
						<button class="btn btn-success" disabled><i class="fa fa-shopping-cart"></i>&nbsp;Add To Cart</button>
					</div>
					<div class="col-xs-6">
						<button class="btn btn-info"><i class="fa fa-magic"></i>&nbsp;Wishlist</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-primary">
				<div class="panel-body productdraggable">
					<div class="col-xs-12">
						<a class="thumbnail" href="#">
							<img src="../images/casio1.jpeg" style="max-height:250px;">
						</a>
					</div>
					<div class="col-xs-12" style="margin-top:-15px;border-bottom:1px solid gray">
						<h4><a href="">Casio Watch</a></h3>
					</div>
					<div class="col-xs-12">
						<h4>Price : <i class="fa fa-rupee"></i>&nbsp;6000</h4>
						<h5 class="text-success">Available In Stock</h5>
						<h4 style="color:red;"><i class="fa fa-star-half-full"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h4>
					</div>
					<div class="col-xs-6">
						<button class="btn btn-success"><i class="fa fa-shopping-cart"></i>&nbsp;Add To Cart</button>
					</div>
					<div class="col-xs-6">
						<button class="btn btn-info"><i class="fa fa-magic"></i>&nbsp;Wishlist</button>
					</div>
				</div>
			</div>
		</div>-->
	</div>
<<<<<<< HEAD
	<div class="col-xs-2 panel-group" style="padding:0;height:600px">
		<div class="dropzone panel panel-success" style="margin:0px;max-height:150px;width:100%;">	
			<div class="panel-heading" style="text-align:center;">
				<h2 style="padding-bottom:5px;"><i class="fa fa-shopping-cart"></i></h2>
				<a id="x1" href="#" style="color:white"><h4>Your Cart has 3 Items</h4></a>
=======
	
	<div class="col-xs-2" style="height:600px">
		<div class="panel panel-success">
			<div class="panel-heading" style="height:100%;width:100%;text-align:center;">
				<h1 style="margin-top:220px"><i class="fa fa-shopping-cart"></i></h1>
				<br>
				<h4>Your Cart is Empty</h4>
>>>>>>> 5d3b0811b28ff9dcefb76770d6b47c8c34e3bdcf
			</div>
		</div>
		<div id="x2" dim-vis="2" class="panel panel-success" style="margin:0px;width:100%;max-height:480px;overflow-y:auto;">
			<table  id="x4" class="table table-bordered table-hover" style="text-align:center;">
				
			</table>
		</div>
	</div>
	<div id="test"></div>
	</body>
	<?php require_once('_js-include.php');?>
	<!--Page Specific JS -->
	<script type="text/javascript">
		$('.productdraggable').draggable({scroll:false,revert:true,zIndex:2000,cursorAt:{left:10,right:10,top:10},container:"body",helper:function(){return $('<div class="bg-primary" style="border:2px solid green;padding:2px"><h4>Casio Watch</h4></div>');},opacity:"1"});
		function ()
		{
			var x = $('.addqt').parent('tr').find('qtnumb');
		}		
		$(".dropzone").droppable({
			drop: function( event, ui ){
				$( "<tr></tr>" ).html( '<td><h4><a href="#" class="addqt" style="color:green"><i class="fa fa-plus"></i></a></h4><h4><a class="subqt" href="#" style="color:orange"><i class="fa fa-minus"></i></a></h4></td><td><h4>Casio Watch</h4></td><td><h4 class="qtnum">1</h4></td><td><h4><a class="rmqt" href="#" style="color:red"><i class="fa fa-times"></i></a></h4></td>').appendTo( $("#x4"));
			}
		});
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
				$("#test").html(data);
			});
			$('#x1').click();
		});
		
	</script>
    </html>