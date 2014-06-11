$(document).on('click','.prodname',function(){
	var productid = $(this).parents('.productdraggable').attr('data-prod');
	var ajxr = $.post('../../controller/ProductModalData.php',{productid:productid},function(data){
		modalProductJson(data);
	})
	.done(function(data){
		
		$('#myModal').modal('show');
		$("#gallery").photobox('a', { thumbs:true });
	});
});
function modalProductJson(data)
{
	var obj = jQuery.parseJSON(data);
	$("#myModal").attr('data-prod',obj.product_id);
	$("#myModalLabel").html(obj.product_name);
	$("#ModalPrice").html(obj.product_name);
	$("#ModalRating").html(obj.product_name);
	$("#ModalFeedbackList").html(obj.product_name);
	$("#ModalNoOfFeedbacks").html(obj.product_name);
	$("#ModalSellerName").html(obj.product_name);
	$("#ModalAvailable").html(obj.product_name);
}