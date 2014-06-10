$(document).ready(function (){			
	var ats = $.post("../../controller/FillProduct.php",function(data){
		productjson(data);
	});
	$('#x1').click();
});