<html>
	<head>
		<title>E-Shop Home</title>
		<?php require_once('_css-include.php'); ?>
		<link href="../css/tiles.css" rel="stylesheet">
		<link href="../css/LoggedAdmin.css" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper">
		<?php require_once('DashboardMain.php');?>
			<div id="page-wrapper">
				<br>
				<div>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Dashboard</li>
				</ol>
				</div>
				<div class="row">
					<div class="col-xs-2">
						<div class="tile purple doubletile">
							<h1 class="title"><i class="fa fa-briefcase"></i></h1>
							<h3 class="title"><a href="#">Category</a></h3>
						</div>
					</div>
					<div class="col-xs-4" style="margin-left:-25px;">
						<div class="tile red singletile">
							<h1 class="title"><i class="fa fa-barcode"></i></h1>
							<h3 class="title"><a href="#">Products</a></h3>
						</div>
						<div style="width:49%;margin-top:-28px;" class="tile blue singletile">
							<h1 class="title"><i class="fa fa-check-square-o"></i></h1>
							<h3 class="title"><a href="#">Orders</a></h3>
						</div>
						<div  style="width:49%;margin-left:3px;margin-top:-28px;" class="tile orange singletile">
							<h1 class="title"><i class="fa fa-truck"></i></h1>
							<h3 class="title"><a href="#">Shipping</a></h3>
						</div>
					</div>
					<div class="col-xs-2"  style="margin-left:-25px;">
						<div class="tile green doubletile">
							<h1 class="title"><i class="fa fa-comments-o"></i></h1>
							<h3 class="title"><a href="#">Feedback</a></h3>
						</div>
					</div>
					<div class="col-xs-4" style="margin-left:-25px;">
						
						<div style="width:49%" class="tile red singletile">
							<h1 class="title"><i class="fa fa-bar-chart-o"></i></h1>
							<h3 class="title"><a href="#">Analysis</a></h3>
						</div>
						<div  style="width:49%;margin-left:3px;" class="tile blue singletile">
							<h1 class="title"><i class="fa fa-credit-card"></i></h1>
							<h3 class="title"><a href="#">Bank</a></h3>
						</div>
						<div class="tile orange singletile"style="margin-top:-28px;">
							<h1 class="title"><i class="fa fa-gears"></i></h1>
							<h3 class="title"><a href="#">Shop Settings</a></h3>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	<?php require_once('_js-include.php'); ?>
	
	</body>
</html>