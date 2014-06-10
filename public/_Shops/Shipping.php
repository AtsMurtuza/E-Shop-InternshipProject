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
				<li><a href="#">Shipping Details</a></li>
			</ol>
			<div id="requestresult"></div>
			
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 style="text-align:center">Shiiping Details</h4>
					</div>
					<div class="panel-body">
						<table class="table table-bordered" style="text-align:center">
							<tr>
								<td rowspan="2"><b>Order Details<b></th>
								<td class="success" colspan="3"><b>Status</b></th>
							</tr>
							<tr>
								<td class=""><b>Placed</b></td>
								<td class=""><b>Dispatched</b></td>
								<td class=""><b>Delivered</b></td>
							</tr>
							<tr>
								<td>2 states book</td>
								<td><button type="button" class="btn btn-primary">Done </button</td>
								<td><button type="button" class="btn btn-primary">Done </button></td>
								<td><button type="button" class="btn btn-primary">Done </button></td>
							</tr>
							
						</table>
							
					</div>
				</div>
			</div>
		 
		</div>
		
		<div id="trialJson" class="col-xs-12">
		</div>

	</div>
		<?php require_once('_js-include.php'); ?>
		<script type="text/javascript">
		$(document).ready(function(){
			var ats = $.post("../../controller/GetOrder.php",function(data){
				alert(data);
			});
		
		});
			
		</script>
	</body>
</html> 