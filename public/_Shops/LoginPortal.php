<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php'); ?>
	</head>
	<body>
		<div class="col-xs-4 col-xs-offset-4">
		<div>
	<form class="form-horizontal" id="HeaderLoginForm"role="form">
		<div class="form-group">
				<label class="control-label" for="loginEmail">Email Address</label>
				<input type="email" class="form-control" id="loginEmail" name="loginEmail">
		</div>
		<div class="form-group">
			<label class="control-label" for="loginPassword">Password</label>
			<input type="password" class="form-control" id="loginPassword" name="loginPassword">
		</div>
		<div class="form-group">
			<div class="checkbox" style="font-size:18px;">
				<label>
				<input id="chk_remember" name="chk_remember" type="checkbox"> Remember me
				</label>
				&emsp;&emsp;&emsp;
				<a id="ForgottenPassword" href="#">Forgot Password ?</a>
			</div>
			<br>
			&emsp;&emsp;&emsp;&emsp;&emsp;
			<button type="button" id="headerLoginBtn" class="btn btn-lg btn-success">Sign in&nbsp;<span class="fa fa-arrow-right"></span></button>
			&nbsp;
			<button type="button" id="headerSignUp" class="btn  btn-lg  btn-info">Create New Account&nbsp;<span class="fa fa-thumbs-up"></span></button>
		</div>
		<div style="border-top:0.5px solid gray;margin-top:40px;">
		<h3 style="margin-left:150px;margin-right:180px;margin-top:-15px;z-index:2;background-color:white;">&nbsp;&nbsp;&nbsp;&nbsp;Login Via</h3>
			<p style="padding:0;font-size:50;text-align:center;vertical-align:middle">
				<a class="text-primary"  href="#"><i class="fa fa-facebook-square "></i></a>
				&nbsp;&nbsp;<a class="text-info" href="#"><i class="fa fa-twitter-square "></i></a>
				&nbsp;&nbsp;<a class="text-danger" href="#"><i class="fa fa-google-plus-square "></i></a>
			</p>
		</h3>
		</div>
	</form>
</div>
		</div>
		<?php require_once('_js-include.php'); ?>
		<!--Page Specific JS-->
		<script src="../js/pages/Login.js"></script>
	</body>
</html>