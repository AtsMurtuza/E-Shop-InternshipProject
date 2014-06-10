$(document).ready(function (){			
	var ats = $.post("../../controller/FillProduct.php",function(data){
		//alert(data);
		productjson2(data);
	});
	$('#x1').click();
});