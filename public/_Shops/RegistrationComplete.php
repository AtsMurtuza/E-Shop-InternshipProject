<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php'); ?>
	</head>
	<body>
	<div class="col-xs-12">
		<h1 style="text-align:center;">E-Shop</h1>
	</div>
		<div class="col-xs-6 col-xs-offset-3" style="margin-top:8%;box-shadow: 10px 10px 5px #888888;border:5px solid gray;text-align:center;">
<?php

	if(isset($_REQUEST["k"]))
	{
		if($_REQUEST["k"]==1)
		{
			echo '<h1>Thank You <span style="color:#4FFFE7" class="fa fa-smile-o"></span> !!</h1><hr><h4>You have been Successfully Registered with Us. Please check your Email for further notice.<br><br> You will be redirected to shortly to our Login Page.</h4>';
		}
		else
		{
			echo '<h1>Sorry <span style="color:#FF334F" class="fa fa-frown-o"></span> !!</h1><hr><h4>Something has not worked out. Please check your Email for further notice. <br><br>You will be redirected to shortly to our Login Page.</h4>';
		}
	}
	else
	{
		echo '<h1>Sorry <span style="color:#FF334F" class="fa fa-frown-o"></span> !!</h1><hr><h4>Something has not worked out. Please check your Email for further notice. <br><br>You will be redirected to shortly to our Login Page.</h4>';
	}
	
?>
		</div>
<?php require_once('_js-include.php'); ?>
	<script type="text/javascript" src="../js/pages/NoBack.js"></script>
	</body>
</html>