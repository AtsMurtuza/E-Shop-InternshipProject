<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php');?>
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
	
	<script type="text/javascript">
			$("#InitRegistration").validate({
				onkeyup: false,
				rules: {
					ShopName:{
						required: true,
						minlength: 2,
						remote: {
							url: "../../controller/CheckShopName.php",
							type: "post",
							data : {
								ShopName : function()
								{
									return $("#ShopName").val();
								}
							}
						}
					},
					ShopOwnerName:{
						required: true,
						minlength: 2
					},
					ShopEmail:{
						required: true,
						email:true
					}					
				},
				messages:{
					ShopName:{
						required: "Please Enter Name of the Shop<br>",
						minlength: "Name of the Shop should be of atleast 2 Characters<br>",
						remote: jQuery.validator.format("{0} is already taken.")
					},
					ShopOwnerName:{
						required: "Please Enter the Owners Name<br>",
						minlength: "Owners Name Should be atleast 2 Characters long<br>"
					},
					ShopEmail:{
						required: "Please Enter an Email Address<br>",
						email: "Email Address Entered is not valid<br>"
					}
				},
				errorPlacement : function(error,element){
					element.attr('data-container','body');
					element.attr('data-toggle','popover');
					if(element.attr('name')=="ShopOwnerName")
					{
						element.attr('data-placement','top');
					}
					else
					{
						element.attr('data-placement','bottom');
					}
					element.attr('data-html','true');
					element.attr('data-content',"<i style='color:red' class='fa fa-exclamation-triangle'></i>&nbsp;" + error.text());
					element.popover('show');
				}
				
			});
		</script>
		<script type="text/javascript">
			$("#InitRegistrationAgree").change(function(){
			
				if($(this).is(':checked'))
				{
					$("#InitRegistrationSubmit").removeAttr("disabled");
				}
				else
				{
					$("#InitRegistrationSubmit").attr("disabled","disabled");
				}
			});
		</script>
		<script type="text/javascript">
			$("#InitRegistrationSubmit").click(function (){
				if($("#InitRegistration").valid())
				{
				$(this).attr("disabled","disabled");
				$("#InitRegistrationAgree").attr("disabled","disabled");
				var ats_jpost = $.post( "../../controller/InitRegistration.php", $( "#InitRegistration" ).serialize() , function(data){
						if(data=="true")
						{
							window.location.href = "RegistrationComplete.php?k=1";
						}
						else
						{
							window.location.href = "RegistrationComplete.php?k=2";
						}
					})
					.fail(function(){
						window.location.href = "RegistrationComplete.php?k=2";
					});
				}
				$(this).removeAttr("disabled");
				$("#InitRegistrationAgree").removeAttr("disabled");
				
				});
		
		</script>
	
</html>