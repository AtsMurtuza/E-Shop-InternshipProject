<html>
	<head>
		<title>E-Shop Admin Home</title>
		<?php require_once('_css-include.php'); ?>
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
			<div id="requestresult"></div>
		 <form id="AddCouponForm" class="horizontal-form" role="form" method="post" action="../../controller/AddGiftCoupon.php">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 style="text-align:center">Add a New Gift Coupon</h4>
					</div>
					<div class="panel-body">		
						<div class="col-md-3">
							<div class="form-group">
								<label for="dropdown">Expiry Date</label>
								<input type="date" placeholder="Expiry Date" name="expirydate" id="expirydate" class="form-control" required>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label for="dropdown">Value <span class="fa fa-rupee"></span></label>
								<input type="textbox" placeholder="Cash Value" name="cashvalue" id="cashvalue" class="form-control" required>
							</div>
						</div>	
						<div class="col-md-3">
							<div class="form-group">
								<button class="btn btn-success btn-lg">Submit</button>
							</div>
						</div>	
					</div>
				</div>
			</div>
		 </form>
		</div>
		
		<div id="trialJson" class="col-xs-12">
		</div>
	</div>
		<?php require_once('_js-include.php'); ?>
		<script type="text/javascript">
			 $(function() {
				$( "#expirydate" ).datepicker({
					numberOfMonths: 3,
					showButtonPanel: true
				});
			});
			$("#AddCouponForm").validate({
				onkeyup: false,
				onfocusout: false,
				rules:{
					expirydate:{
						required: true
					},
					cashvalue:{
						required: true
					}
				},
				messages:{
					expirydate:{
						required: "Need to Set Expiry Date"
					},
					cashvalue:{
						required: "Coupon Needs to have a value"
					}
				},
				errorPlacement : function(error,element){
					element.attr('data-container','body');
					element.attr('data-toggle','popover');
					element.attr('data-placement','bottom');
					element.attr('data-html','true');
					element.attr('data-content',"<i style='color:red' class='fa fa-exclamation-triangle'></i>&nbsp;" + error.text());
					element.popover('show');
				}
				
			});
			
		</script>
	</body>
</html> 