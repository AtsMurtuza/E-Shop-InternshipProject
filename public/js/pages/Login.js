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

$("#headerSignUp").click(function (){
	window.location.href = "FirstRegistration.php";
});

$(document).on('click',"#headerLoginBtn",function (){
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
