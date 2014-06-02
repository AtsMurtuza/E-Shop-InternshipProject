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
	<div>
	<div style="z-index:5" class="col-xs-2">
		<div class="list-group">
		<a href="#" class="list-group-item active"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		</div>
	</div>
	<div class="col-xs-8" style="left:7">
		<?php require_once('DealsInfo.php');?>
	</div>
	<div style="z-index:5" class="col-xs-2">
		<div class="list-group">
		<a href="#" class="list-group-item active"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1</h4></a>
		<a href="#" class="list-group-item"><h4 style="text-align:center">Category 1<span class="pull-right badge">14</span></h4></a>
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