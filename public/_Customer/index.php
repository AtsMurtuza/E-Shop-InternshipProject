<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php');?>
		<!--Page Specific -->
		<style>
			.badge{
				background-color:green;
			}
		</style>
	</head>
	<body>
	<br>
	<div  style="z-index:5" class="col-xs-8 col-xs-offset-2">
		<form id="SearchProducts">
		<div class="form-group col-lg-12">
			<div class="input-group">
				<input type="text" class="input-lg form-control">
				<span class="input-group-btn">
					<button style="color:#428bca" class="btn btn-lg btn-default" type="button">Search &nbsp;<i class="fa fa-search"></i></button>
				</span>
			</div>
		</div>
		</form>
	</div>
	<div class="bg-success col-xs-2">
		<h1><span class="fa fa-shopping-cart"></span></h1>
	</div>
	<div class="col-xs-12">	
	<div style="z-index:5" class="col-xs-2">
		<div class="panel panel-primary">
		<div class="list-group">
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		</div>
		</div>
	</div>
	<div class="col-xs-8" style="left:7">
		<?php require_once('DealsInfo.php');?>
	</div>
	<div style="z-index:5" class="col-xs-2">
		<div class="panel panel-primary">
		<div class="list-group">
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		</div>
		</div>
	</div>
	</div>
	<br>
	<div class="col-xs-12">
	
	
	<div class="col-xs-12" style="z-index:5;">
		<div class="panel panel-primary">
			<div class="panel-heading">
			<button style="margin-top:5;"class="pull-right btn btn-success btn-lg">Check Out More</button>
			<h3 style="font-weight:700;text-align:center;">&emsp;&emsp;&emsp;&emsp;&emsp;Deals For You</h3>
			</div>
			<div class="panel-body">
				
				<div class="productDraggable col-xs-3">
				<div class="panel panel-default">
					<div class="panel-body" style="text-align:center;">
						<a class="thumbnail" data-toggle="modal" data-target="#myModal">
							<img src="../images/casio1.jpeg" style="width:100%;height:200px;">
						</a>
					
						<h4 style="text-align:center"><a href="#">Casio G-Shock</a></h4>
						<h4>
							<span style="color:green"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i><i class="fa fa-star-o"></i></span>
						</h4>
						<h5>Short Description <a class="popoverseemore"data-container="body" data-toggle="popover" data-placement="right">See more</a></h5>
						<div>
						<button class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
						<button class="btn btn-primary"><i class="fa fa-suitcase"></i> Wishlist</button>
						</div>
					</div>
					<div class="panel-footer" style="text-align:center;">Price : 6500 </div>
				</div>
				</div>
				
				<div class="productDraggable col-xs-3">
				<div class="panel panel-default">
					<div class="panel-body" style="text-align:center;">
						<a class="thumbnail" data-toggle="modal" data-target="#myModal">
							<img src="../images/casio1.jpeg" style="width:100%;height:200px;">
						</a>
					
						<h4 style="text-align:center"><a href="#">Casio G-Shock</a></h4>
						<h4>
							<span style="color:green"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i><i class="fa fa-star-o"></i></span>
						</h4>
						<h5>Short Description <a class="popoverseemore"data-container="body" data-toggle="popover" data-placement="right">See more</a></h5>
						<div>
						<button class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
						<button class="btn btn-primary"><i class="fa fa-suitcase"></i> Wishlist</button>
						</div>
					</div>
					<div class="panel-footer" style="text-align:center;">Price : 6500 </div>
				</div>
				</div>
				
				<div class="productDraggable col-xs-3">
				<div class="panel panel-default">
					<div class="panel-body" style="text-align:center;">
						<a class="thumbnail" data-toggle="modal" data-target="#myModal">
							<img src="../images/casio1.jpeg" style="width:100%;height:200px;">
						</a>
					
						<h4 style="text-align:center"><a href="#">Casio G-Shock</a></h4>
						<h4>
							<span style="color:green"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i><i class="fa fa-star-o"></i></span>
						</h4>
						<h5>Short Description <a class="popoverseemore"data-container="body" data-toggle="popover" data-placement="right">See more</a></h5>
						<div>
						<button class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
						<button class="btn btn-primary"><i class="fa fa-suitcase"></i> Wishlist</button>
						</div>
					</div>
					<div class="panel-footer" style="text-align:center;">Price : 6500 </div>
				</div>
				</div>
				
				<div class="productDraggable col-xs-3">
				<div class="panel panel-default">
					<div class="panel-body" style="text-align:center;">
						<a class="thumbnail" data-toggle="modal" data-target="#myModal">
							<img src="../images/casio1.jpeg" style="width:100%;height:200px;">
						</a>
					
						<h4 style="text-align:center"><a href="#">Casio G-Shock</a></h4>
						<h4>
							<span style="color:green"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i><i class="fa fa-star-o"></i></span>
						</h4>
						<h5>Short Description <a class="popoverseemore"data-container="body" data-toggle="popover" data-placement="right">See more</a></h5>
						<div>
						<button class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
						<button class="btn btn-primary"><i class="fa fa-suitcase"></i> Wishlist</button>
						</div>
					</div>
					<div class="panel-footer" style="text-align:center;">Price : 6500 </div>
				</div>
				</div>
				
			</div>
		</div>
	</div>
	</div>
	<?php require_once('unloggedheader.php');?>
	<?php require_once('Login.php');?>
	<?php require_once('footer.php');?>
	
	</body>
	<?php require_once('_js-include.php');?>
	<!--Page Specific JS -->
	
	<script type="text/javascript">
		$("#HeaderLogin").click(function(){
			$('#LoginModal').modal('toggle');
		});
	</script>
	<script type="text/javascript" src="../js/pages/Login.js"></script>
</html>