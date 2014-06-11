<html>
	<head>
		<title>E-Shop Admin Home</title>
		<?php require_once('_css-include.php'); ?>
		<style type="text/css">
			.ats-a
			{
				color:#fff;
			}
			.ats-a:hover
			{
				color:#080808;
				
			}
			
		</style>
		
		<style type="text/css">
			
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
		</style>
	</head>
	<body>
	<div id="wrapper">
		<?php require_once('DashboardMain.php'); ?>
		<div id="page-wrapper">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Category</a></li>
				<li class="active">Add Category</li>
			</ol>
			<div class="col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Second
				</div>
				<div class="panel-body">
				<form  class="form-horizontal" id="SecondRegistration">
					<div class="form-group">
						<div class="col-md-2 col-md-offset-2" style="text-align:right;">
							<label class="control-label">Type Of Firm : </label>
						</div>
						<div class="col-md-6">
							<select id="FirmType" class="form-control">
								<option value="1">Proprietary</option>
								<option value="2">Partnership</option>
								<option value="3">HUF</option>
								<option value="4">Trust</option>
								<option value="5">AOP</option>
								<option value="6">Company</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-2 col-md-offset-2" style="text-align:right;">
							<label class="control-label">Type Of Seller : </label>
						</div>
						<div class="col-md-6">
							<select id="SellerType" class="form-control">
								<option value="1">Retailer</option>
								<option value="2">Semi-Wholesaler</option>
								<option value="3">Wholesaler</option>
								<option value="4">Distributor</option>
								<option value="5">Manufacturer</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-2 col-md-offset-2" style="text-align:right;">
							<label class="control-label">Type Of Products : </label>
						</div>
						<div class="col-md-6">
							<select id="SellerType" class="form-control">
								<option value="1">Brand New</option>
								<option value="2">Refurbished Factory Seconds</option>
								<option value="3">Second Hand</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-2 col-md-offset-2" style="text-align:right;">
							<label class="control-label">Desired URL : </label>
						</div>
						<div class="col-md-6">
							<div class="input-group">
								<span class="input-group-addon">www.e-shop.com/</span>
								<input type="text" class="form-control" id="DesiredURL">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-2 col-md-offset-2" style="text-align:right;">
							<label class="control-label">Contact Number :</label>
						</div>
						<div class="col-md-6">
							<div class="input-group">
							<div class="input-group-btn">
								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><b>Country Code &nbsp; <span class="caret"></span></b></button>
									<ul class="dropdown-menu">
										<li><a href="#">USA (+01)</a></li>
										<li><a href="#">India (+91)</a></li>
										<li><a href="#">Pakistan (+92)</a></li>
									</ul>
							</div>
							<input type="text" class="form-control">
							</div>
						</div>
					</div>
				</form>
			</div>
			</div>
			</div>
		</div>
		
		
	</div>
		<?php require_once('_js-include.php'); ?>
		
	</body>
</html>