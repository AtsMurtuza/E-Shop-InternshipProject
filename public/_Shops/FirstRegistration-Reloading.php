<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php'); ?>
	</head>
	<body>
		<div class="col-xs-10 col-xs-offset-1">
			<form id="InitRegistration" action="../../controller/InitRegistration.php" method="POST">
				<div class="form-group col-xs-3">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
						<input class="form-control" type="textbox" id="ShopName" name="ShopName" placeholder="Shop Name">
					</div>
				</div>
				<div class="form-group col-xs-3">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input class="form-control" type="textbox" id="ShopOwnerName" name="ShopOwnerName" placeholder="Owner's Name">
					</div>
				</div>
				<div class="form-group col-xs-3">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input class="form-control" type="textbox" id="ShopEmail" name="ShopEmail" placeholder="Email Address">
					</div>
				</div>
				<div class="form-group col-xs-3">
					<button type="submit" name="InitRegistrationSubmit" id="InitRegistrationSubmit" disabled class="btn btn-success btn-lg">Register</button>
				</div>
				<div class="checkbox col-xs-5 col-xs-offset-3" style="margin-top:-5px;">
					<label>
						<input type="checkbox" id="InitRegistrationAgree" name="InitRegistrationAgree"> I Agree to all the <a href="#openPopup">Terms & Agreements</a> of this Website
					</label>
				</div>
				<div class="col-xs-5 col-xs-offset-3">
					<p id="ErrorMessages"></p>
				</div>
			</form>
		</div>
		<?php require_once('_js-include.php'); ?>
		<!--Page Specific JS-->
		<script type="text/javascript">
			$("#InitRegistration").validate({
				rules:{
					ShopName:{
						required: true,
						minlength: 2
					},
					ShopOwnerName:{
						required: true,
						minlength: 2
					},
					ShopEmail:{
						required: true,
						email:true
					}
				},
				messages:{
					ShopName:{
						required: "Please Enter Name of the Shop<br>",
						minlength: "Name of the Shop should be of atleast 2 Characters<br>"
					},
					ShopOwnerName:{
						required: "Please Enter the Owners Name<br>",
						minlength: "Owners Name Should be atleast 2 Characters long<br>"
					},
					ShopEmail:{
						required: "Please Enter an Email Address<br>",
						email: "Email Address Entered is not valid<br>"
					}
				},
				errorPlacement : function(error,element){
					element.attr('data-container','body');
					element.attr('data-toggle','popover');
					if(element.attr('name')=="ShopOwnerName")
					{
						element.attr('data-placement','top');
					}
					else
					{
						element.attr('data-placement','bottom');
					}
					element.attr('data-html','true');
					element.attr('data-content',"<i style='color:red' class='fa fa-exclamation-triangle'></i>&nbsp;" + error.text());
					element.popover('show');
				}
				
			});
		</script>
		<script type="text/javascript">
			$("#InitRegistrationAgree").change(function(){
			
				if($(this).is(':checked'))
				{
					$("#InitRegistrationSubmit").removeAttr("disabled");
				}
				else
				{
					$("#InitRegistrationSubmit").attr("disabled","disabled");
				}
			});
		</script>
	</body>
</html>