<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php'); ?>
		<?php require_once('../../util/FunctionUtil.php'); ?>
	</head>
	<body>
		<div class="col-xs-6 col-xs-offset-3">
		
		<?php
			$activation=$_REQUEST["activation"];
			if($activation == "true")
			{
		?>
			<form id="ChangePassword" name="ChangePassword" class="form-horizontal">
				<div class="form-group">
					<label for="NewPassword">Registered Email</label>
					<input class="form-control" type="textbox" id="EmailAddr" name="EmailAddr">
					<span class="help-text">Registered Email Address</span>	
				</div>
				<div class="form-group">
					<label for="NewPassword">Current Password</label>
					<input class="form-control" type="textbox" id="Password" name="Password">
					<span class="help-text">Current Password is the Default Password sent to you in the Email</span>	
				</div>
				<div class="form-group">
					<label for="NewPassword">New Password</label>
					<input class="form-control" type="Password" id="NewPassword" name="NewPassword">
					<span class="help-text">Password which contains atleast 6 characters with atleast 1 Uppercase, 1 Lowercase, 1 Digit and 1 Special Character from @,#,$,% </span>	
				</div>
				<div class="form-group">
					<label for="NewPassword">Confirm Password</label>
					<input class="form-control" type="Password" id="ConfirmPassword" name="ConfirmPassword">
					<span class="help-text">Password that matches the above given password </span>	
				</div>
				<div class="form-group" style="text-align:center">
					<button type="button" class="btn btn-lg btn-success" type="textbox" id="ChangePasswordBtn" name="ChangePasswordBtn">Change Password</button>
				</div>
			</form>
		<?php
			}
			else
			{
				echo '<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> The link has expired or your account has already been activated. Proceed to <a href="shoplogin.php">Login</a> to access your Account.</div>';
			}
		?>
		</div>
<?php require_once('_js-include.php'); ?>

	<script type="text/javascript">
			$("#ChangePassword").validate({
				onkeyup: false,
				onfocusout:false,
				rules: {
					EmailAddr:{
						required:true,
						email:true
					},
					Password:{
						required:true,
					},
					NewPassword:{
						required:true,
						minlength:6,
						remote:{
							url:"../../controller/ValidatePassword.php",
							method:"post",
							data:{
								Password: function(){
									return $("#NewPassword").val();
								}
							}
						}
					},
					ConfirmPassword:
					{
						required:true,
						equalTo:"#NewPassword"
					}
				},
				messages:{
					EmailAddr:{
						required:"Email Address is Required",
						email:"Invalid Email Address"
					},
					Password:{
						required:"Current Password is Required",
					},
					NewPassword:{
						required:"You need to set a new Password",
						minlength:"The Length should be atleast 6 characters",
						remote:"The Password is Invalid. Check Rules given below the Textbox"
					},
					ConfirmPassword:
					{
						required:"You need to re-write the New Password ",
						equalTo:"The Password given above doesn't match"
					}
				},
				errorPlacement : function(error,element){
					element.attr('data-container','body');
					element.attr('data-toggle','popover');
					element.attr('data-placement','right');
					element.attr('data-html','true');
					element.attr('data-content',"<i style='color:red' class='fa fa-exclamation-triangle'></i>&nbsp;" + error.text());
					element.popover('show');
				}
				
			});
			
			
			$("#ChangePasswordBtn").click(function(){
				if($("#ChangePassword").valid())
				{
					var ats_jpost = $.post( "../../controller/ChangePassword.php", {Email:$("#EmailAddr").val() , Password:$("#Password").val(),NewPassword:$("#NewPassword").val()} , function(data){
						if(data=="true")
						{
							window.location.href = "LoginPortal.php";
						}
						else
						{
							alert("Password Could Not Be Changed");
						}
					})
					.fail(function(){
						alert("Password Could Not Be Changed");
					});
				}
				
			});
		</script>
	</body>
</html>