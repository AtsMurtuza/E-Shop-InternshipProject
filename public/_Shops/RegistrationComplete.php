<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php'); ?>
	</head>
	<body>
		<div class="col-xs-6 col-xs-offset-3">
<?php

	if($_REQUEST["k"]==1)
	{
		echo '<div class="alert alert-success alert-dismissable">  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>  You have been Successfully Registered with Us. Please check your Email for further notice.</div>';
	}
	else
	{
		echo '<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>  Something has not worked out. Please check your Email for further notice. </div>';
	}

?>
		</div>
<?php require_once('_js-include.php'); ?>
	</body>
</html>