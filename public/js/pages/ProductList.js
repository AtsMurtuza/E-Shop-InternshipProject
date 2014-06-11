$(document).ready(function (){			
	var ats = $.post("../../controller/FillProduct.php",function(data){
		//alert(data);
		productjson2(data);
	});
	var ajxr = $.post('../../controller/ShowCart.php',function(data){
		populateCart(data);
	});
	$('#x1').click();
});