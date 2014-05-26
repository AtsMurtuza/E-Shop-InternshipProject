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
				<label class="control-label" for="loginPassword">Password</label>
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
		<script src="../js/pages/Login.js"></script>
	</body>
</html>