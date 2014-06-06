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
	<body>
	<br>
	<div class="col-xs-12" style="z-index:5;">
	<div class="col-xs-2">
		<button style="width:100%" class="btn btn-primary tip" data-container="body" data-toggle="tooltip" data-placement="right" data-html="true" title="Your Wishlist Containing 5 Items"><h2><span class="fa fa-bookmark"></span></h2><span style="margin-top:-20" class="pull-right badge">5</span></button>
	</div> 
	<div  style="margin-top:15px;" class="col-xs-8">
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
	<div class="col-xs-2">
		<button style="width:100%"class="btn btn-success tip" data-container="body" data-toggle="tooltip" data-placement="left" data-html="true" title="Your Shopping Cart Containing 5 Items"><h2><span class="fa fa-shopping-cart"></span></h2><span style="margin-top:-20" class="pull-right badge">5</span></button>
	</div>
	</div>
	<div style="padding-top:10px;"class="col-xs-12">	
	<div style="z-index:5" class="col-xs-2">
		<div class="panel panel-primary">
		<div class="list-group">
		<a href="#" class="list-group-item"><h4 style="text-align:center">Electronics<span class="fa fa-bolt pull-right"></span></h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Watches<span class="fa fa-clock-o pull-right"></span></h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Clothes<span class="fa fa-male pull-right"></span></h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Books<span class="fa fa-book pull-right"></span></h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Footwear<span class="fa fa-paw pull-right"></span></h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Furniture<span class="fa fa-umbrella pull-right"></span></h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Sports<span class="fa fa-gamepad pull-right"></span></h4></a>
		</div>
		</div>
	</div>
	<div class="col-xs-8" style="left:7">
		<?php require_once('DealsInfo.php');?>
	</div>
	<div style="z-index:5" class="col-xs-2">
		<div class="panel panel-primary">
		<div class="list-group">
		<a href="#" class="list-group-item"><h4 style="text-align:center">Laptops<span class="fa fa-laptop pull-right"></span></h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Mobile Phones<span class="fa fa-mobile pull-right"></span></h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Luggage & Travel<span class="fa fa-suitcase pull-right"></span></h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Mobile Accessories<span class="fa fa-headphones pull-right"></span></h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Media<span class="fa fa-music pull-right"></span></h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Camera<span class="fa fa-camera pull-right"></span></h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Stationery<span class="fa fa-pencil pull-right"></span></h4></a>
		</div>
		</div>
	</div>
	</div>
	<br>
	<div class="col-xs-12">
	
	
	<div class="col-xs-12" style="z-index:5;">
		<div class="panel panel-success">
			<div class="panel-heading">
			<button style="margin-top:5;"class="pull-right btn btn-primary btn-lg">Check Out More</button>
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
		$('.tip').tooltip();
		$("#HeaderLogin").click(function(){
			$('#LoginModal').modal('toggle');
		});
	</script>
	<script type="text/javascript" src="../js/pages/Login.js"></script>
</html>