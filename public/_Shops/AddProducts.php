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
	</head>
	<body>
		<div id="wrapper">
		<?php require_once('DashboardMain.php'); ?>
		<div id="page-wrapper">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li class="active">Add Products</li>
			</ol>
			<form id="SingleProd" method="post" action="../../controller/AddProduct.php" enctype="multipart/form-data" class="horizontal-form">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 style="text-align:center">Add a New Product</h4>
					</div>
					<div class="panel-body">
						<div class="col-xs-3">
							<div id="previewLoaderDiv"style="height:250px;width:95%;">
								<img id="previewLoader" style="height:100%;width:100%" alt="No Preview Available">
							</div>
							<div>
								<br>
								<input type="file" id="file" name="file">
							</div>
						</div>
						<div class="col-xs-9">
							<div class="form-group">
								<label for="dropdown">Product Name</label>
								<input type="textbox" placeholder="ProductName" name="ProductName" id="ProductName" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="dropdown">Category</label>
								<select id="CategorySelect" name ="CategorySelect" class="form-control">
								</select>
							</div>
							<div class="form-group">
								<label for="textarea">Product Description</label>		
								<textarea class="form-control" name="ProductDescription" id="ProductDescription" required></textarea>
							</div>
							
							<div class="row">
								<div class="col-md-4">
								<div class="form-group">
									<label for="textarea">Unit Price</label>		
									<input type="text" class="form-control" size="4" id="UnitPrice" name="UnitPrice" required/>
								</div>
								</div>
								
								<div class="col-md-4">
								<div class="form-group">
									<label for="textarea">MRP (Maximum Retail Price)</label>		
									<input type="text" class="form-control" id = "MRP" name = "MRP" required/>
								</div>
								</div>
								
								<div class="col-md-4">
								<div class="form-group">
									<label for="textarea">Available Size</label>				
									<input type="text" class="form-control" id = "Size" name = "Size" required/>
								</div>
								</div>
								
								<div class="col-md-4">
								<div class="form-group">
									<label for="textarea">Available color</label>				
									<input type="text" class="form-control" id = "color" name = "color"required/>
								</div>
								</div>
								
								<div class="col-md-4">
								<div class="form-group">
									<label for="textarea">Discount</label>				
									<input type="text" class="form-control" id="Discount" name="Discount"/>
								</div>
								</div>
								
								<div class="col-md-4">
								<div class="form-group">
									<label for="textarea">Weight</label>				
									<input type="text" class="form-control" id = "Weight" name = "Weight"required>
								</div>
								</div>
								
								<div class="col-md-4">
								<div class="form-group">
									<label for="textarea">Units in Stock</label>				
									<input type="text" class="form-control" id = "Stock" name = "Stock" required/>
								</div>
								</div>
								
							</div>
							
							<div style="text-align:center;">
								<button class="btn btn-lg btn-success" id="saveProduct" >Save New Product</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
		</div>
		<?php require_once('_js-include.php'); ?>
		<script type="text/javascript">
		
		/*$("#saveProduct").click(function(){
			
			var ats_jpost = $.post( "../../controller/AddProduct.php", {product_name:$("#ProductName").val()} , function(data){
			
				alert(data);
			
			});
		
		});
		*/
		$(document).ready(function(){
		
			var ajxr = $.post("../../controller/CategoryList.php",function(data){
			
				$("#CategorySelect").html(data);
			
			});
		
		
		});
		
		
		function loadPreview(inputfile){
		
			if(inputfile.files && inputfile.files[0]){
				var reader = new FileReader();
				reader.onload = function (e){
					$("#previewLoader").attr("src",e.target.result);
				}
				reader.readAsDataURL(inputfile.files[0]);
			}
		}
		
		$("#file").change(function(){
			loadPreview(this);
		});
		</script>
	</body>
</html>