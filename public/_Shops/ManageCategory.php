<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php'); ?>
	</head>
	<body>
		<div class="col-xs-8 col-xs-offset-2">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h4 class="col-xs-6">Category Management</h4>
				<p>
				<button class="btn btn-success col-xs-offset-3" ><i class="fa fa-plus"></i> Add New Category</button>
				</p>
			</div>
			<table class="table table-hover table-condensed">
			<tr>
				<th style="text-align:center">Category Name</th>
				<th style="text-align:center">Parent Category</th>
				<th style="text-align:center">Products</th>
				<th style="text-align:center"></th>
				<th style="text-align:center"></th>
			</tr>
			<tr>
				<td style="text-align:center">Electronics</td>
				<td style="text-align:center">-</td>
				<th style="text-align:center"><a><i class="fa fa-eye"></i>&nbsp;View</a></th>
				<td style="text-align:center"><a><i class="fa fa-pencil"></i>&nbsp;Edit</a></td>
				<td style="text-align:center"><a><i class="fa fa-times"></i>&nbsp;Delete</a></td>
			</tr>
			<tr>
				<td style="text-align:center">Mobile</td>
				<td style="text-align:center">Electronics</td>
				<th style="text-align:center"><a><i class="fa fa-eye"></i>&nbsp;View</a></th>
				<td style="text-align:center"><a><i class="fa fa-pencil"></i>&nbsp;Edit</a></td>
				<td style="text-align:center"><a><i class="fa fa-times"></i>&nbsp;Delete</a></td>
				
			</tr>
			
			</table>
		</div>
		<?php require_once('_js-include.php'); ?>
		<!--Page Specific JS-->
		
	</body>
</html>