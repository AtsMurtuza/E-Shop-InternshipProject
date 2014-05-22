<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php'); ?>
	</head>
	<body>
		<div class="col-xs-4 col-xs-offset-4">
		<form class="form-horizontal" id="HeaderLoginForm"role="form">
			<div class="form-group">
				<label class="control-label" for="loginEmail">Email Address</label>
				<input type="email" class="form-control" id="loginEmail" name="loginEmail">
			</div>
			<div class="form-group">
				<label class="control-label" for="loginEmail">Password</label>
				<input type="password" class="form-control" id="loginPassword" name="loginPassword">
			</div>
			<div class="form-group">
			<div class="checkbox">
				<label>
				<input id="chk_remember" name="chk_remember" type="checkbox"> Remember me
				</label>
			</div>
			</div>
			<div class="form-group">
				<button type="button" id="headerLoginBtn" class="btn btn-success">Sign in</button>
				or
				<button type="button" id="headerSignUp" class="btn btn-info">Create New Account</button>
			</div>
			
		</form>
		</div>
		<?php require_once('_js-include.php'); ?>
		<!--Page Specific JS-->
		<script type="text/javascript">
			$("#HeaderLoginForm").validate({
				onkeyup: false,
				onfocusout: false,
				rules:{
					loginEmail:{
						required: true,
						email:true
					},
					loginPassword:{
						required: true,
					}
				},
				messages:{
					loginEmail:{
						required: "Please Enter Your Email Address",
						email: "Please Enter A Valid Email Address"
					},
					loginPassword:{
						required: "Please Enter Your Password",
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
		</script>
		
		<script type="text/javascript">
			$("#headerSignUp").click(function (){
				window.location.href = "FirstRegistration.php";
			});
			$("#headerLoginBtn").click(function (){
				if($("#HeaderLoginForm").valid())
				{
				$(this).attr("disabled","disabled");
				var ats_jpost = $.post( "../../controller/ValidateLogin.php", {Email:$("#loginEmail").val() , Password:$("#loginPassword").val()} , function(data){
					if(data=="true")
					{
						window.location.href = "Home.php";
					}
					else
					{
						window.location.href = "LoginPortal.php?key="+ data;
					}
				})
				.fail(function(){
					window.location.href = "LoginPortal.php";
				});
				}
				$(this).removeAttr("disabled");
				
				});
		
		</script>
	</body>
</html>