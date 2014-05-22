<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php'); ?>
		<?php require_once('../../util/FunctionUtil.php'); ?>
	</head>
	<body>
		<div class="col-xs-6 col-xs-offset-3">
		
		<?php
		if(isset($_POST["activation"]))
		{
			FunctionalUtility::redirect_to("ActivateShop.php/activation=".$_POST["activation"]);
		}
		else
		{
			FunctionalUtility::redirect_to("../../controller/ActivateShop.php?key={$_REQUEST["key"]}");
		}
		?>
		</div>
<?php require_once('_js-include.php'); ?>
	</body>
</html>