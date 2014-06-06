<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php');?>
		<!--Page Specific -->
		<style type="text/css">
			h2,th,td  
			{
				text-align:center;
			}
		</style>
	</head>
	<body>
		<div class="col-xs-offset-2 col-xs-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2>Header Selection</h2>
				</div>
				<table class="table table-hover table-bordered">
					<tr>
						<th>Step</th>
						<th>Description</th>
						<th>Detail Window</th>
						<th>Status</th>
					</tr>
					<tr>
						<td>Step 1</td>
						<td>Selecting Type of Header</td>
						<td><button type="button" id="Step1Btn" style="width:50%"  data-toggle="modal" data-target="#HeaderDesignModel" class="btn btn-lg btn-primary">Open Window</button></td>
						<td>Incomplete</td>
					</tr>
				</table>
			</div>
		</div>
		<?php require_once('HeaderDesignModel.php');?>
		<?php require_once('HeaderModel1.php');?>
	</body> 
	<?php require_once('_js-include.php');?>
	<!--Page Specific JS -->
	<script type="text/javascript">
		$("#Step1Btn").click(function(){
			$('.modal-header').html('<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h2>Header Type</h2> ');
			$('.modal-body').html($("#Modal1").html());
		});
	</script>
</html>