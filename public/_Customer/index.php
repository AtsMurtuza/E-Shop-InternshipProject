<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php');?>
		<!--Page Specific -->
	</head>
	<body>
	<?php require_once('unloggedheader.php');?>
	
	<?php require_once('footer.php');?>
	<?php require_once('Login.php');?>
	</body>
	<?php require_once('_js-include.php');?>
	<!--Page Specific JS -->
	
	<script type="text/javascript">
		var temp = $('#loginform');
		$("#HeaderLogin").popover({
			html:true,
			content : temp,
			title:'<h4 style="text-align:center;">Sign In</h4>',
			placement:"bottom", 
			trigger:'click'
		
		});
		
		$(document).ready(function(){
			$("#HeaderLogin").popover('show');
		});
	</script>
	<script type="text/javascript" src="../js/pages/Login.js"></script>
</html>