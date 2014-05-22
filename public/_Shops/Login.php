<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php'); ?>
	</head>
	<body>
		<div class="col-xs-10 col-xs-offset-1">
		<form class="form-inline" id="HeaderLoginForm"role="form">
			<div class="form-group">
				<input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Email Address">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password">
			</div>
			<div class="checkbox">
				<label>
				<input id="chk_remember" name="chk_remember" type="checkbox"> Remember me
				</label>
			</div>
			<button type="button" id="headerLoginBtn" class="btn btn-success">Sign in</button>
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
					element.attr('data-placement','bottom');
					element.attr('data-html','true');
					element.attr('data-content',"<i style='color:red' class='fa fa-exclamation-triangle'></i>&nbsp;" + error.text());
					element.popover('show');
				}
				
			});
		</script>
		
		<script type="text/javascript">
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