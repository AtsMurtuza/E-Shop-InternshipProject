<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php');?>
		<!--Page Specific -->
		<link href="../css/PricingPlans.css" rel="stylesheet">
	</head>
	<body>
	<?php require_once('unloggedheader.php');?>
	<div id="RegistrationDiv" style="min-height:650px;margin-top:-70px;"class="bg-success">
		<?php require_once('FirstRegistration.php');?>	
	</div>
	<div id="AboutUsDiv"  style="min-height:650px;margin-top:1px;" class="bg-warning">
		<?php require_once('AboutUs.php');?>
	</div>
	<div id="PricingPlanDiv" style="min-height:650px;margin-top:1px;" class="bg-info">
		<?php require_once('PricingPlans.php');?>
	</div>
	<div id="TestimonialDiv" style="min-height:650px;margin-top:1px;" class="bg-success">
		<?php require_once('Testimonials.php');?>
	</div>
	<div id="FAQDiv" style="min-height:650px;margin-top:1px;" class="bg-warning">
		<?php require_once('FAQ.php');?>
	</div>
	<div id="TalkToUsDiv" style="min-height:600px;padding:2px;margin-top:1px;" class="bg-info">
		<?php require_once('TalkToUs.php');?>
	</div>
	
	<?php require_once('footer.php');?>
	
	</body>
	<?php require_once('_js-include.php');?>
	<!--Page Specific JS -->
	<script src="../js/pages/Login.js"></script>
	<script src="../js/pages/FirstRegistration.js"></script>
	
</html>