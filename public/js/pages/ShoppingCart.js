		var cartProdArray =[];
		function addCartDb(prodid)
		{
			var ajxr = $.post('../../controller/AddCart.php',{product_id:prodid},function(data){
				//alert(data);
			});
		}
		
		function removeCartDb(prodid)
		{
			var ajxr = $.post('../../controller/DeleteCart.php',{product_id:prodid},function(data){
				//alert(data);
			});
		}
		function updateAddCartDb(prodid)
		{	
			var qty;
			$('#x4 > tbody  > tr').each(function() {	
				if($(this).attr('prod-data')==prodid)
				{
					var x = $(this).find('.qtnum');
					qty = parseInt(x.html());		
				}
			});
			//alert(prodid + " "+ qty);
			var ajxr = $.post('../../controller/UpdateCart.php',{product_id:prodid,quantity:qty},function(data){
				//alert(data);
			});
		}
		function updateCartDb(linkvar)
		{
			var qty,prodid;
			var x = $(linkvar).parents("tr");
			x.each(function(){
				prodid = x.attr('prod-data');
				qty = parseInt(x.find('.qtnum').html());
				
			});
			//alert(prodid + " "+ qty);
			var ajxr = $.post('../../controller/UpdateCart.php',{product_id:prodid,quantity:qty},function(data){
				//alert(data);
			});
		}
		function cartItemsNumber()
		{
			$("#cartnumb").html(cartProdArray.length);
		}
		function deleteProductKeyCart(key)
		{
			cartProdArray.splice( $.inArray(key, cartProdArray), 1 );
			cartItemsNumber();
			removeCartDb(key);
		}
		function addProductKeyCart(key)
		{
			if(jQuery.inArray(key,cartProdArray)==-1)
			{
				cartProdArray.push(key);
				cartItemsNumber();
				return true;
			}
			else
			{
			
				$('#x4 > tbody  > tr').each(function() {
					
					if($(this).attr('prod-data')==key)
					{
						var x = $(this).find('.qtnum');
						x.html(parseInt(x.html()) + 1);
						
					}
				});
				
				cartItemsNumber();
				return false;
			}
			
		}
		
		function addQuantityToCart(linkvar)
		{
			var x = $(linkvar).parents("tr");
			x.each(function(){
				var z = x.find('.qtnum');
				z.html(parseInt(z.html()) + 1);
			});
		}
		function subQuantityFromCart(linkvar)
		{
			var x = $(linkvar).parents("tr");
			x.each(function(){
				var z = x.find('.qtnum');
				if(parseInt(z.html())>1)
				{
					z.html(parseInt(z.html()) - 1);
					
				}
				else
				{
					x.remove();
					deleteProductKeyCart(x.attr('prod-data'));
				}
			});
		}
		
		function removeFromCart(linkvar)
		{
			var x = $(linkvar).parents("tr");
			x.each(function(){
				x.remove();
				deleteProductKeyCart(x.attr('prod-data'));
			});
			
		}
		
		function addcartrow(productname,prodid)
		{
				
				var addbtn = $('<a  href="#" class="addqt" style="color:green"></a>').html('<i class="fa fa-plus"></i>');
				var subbtn = $('<a class="subqt" href="#" style="color:orange"></a>').html('<i class="fa fa-minus"></i>');
				var rmbtn = $('<a href="#" class="rmqt" style="color:red"></a>').append('<i class="fa fa-times"></i>');
				var tempi = $('<h4></h4>').append(addbtn);
				var tempi2 = $('<h4></h4>').append(subbtn);
				var tempj = $('<td></td>').append(tempi);
				tempj.append(tempi2);
				var tempi3 = $('<h4></h4>').append(rmbtn);
				var tempi4 = $('<td></td>').append(tempi3);
				var testrow = $( "<tr prod-data="+ prodid +"></tr>" ).append( tempj );
				testrow.append('<td><h4>'+productname+'</h4></td><td><h4 class="qtnum">1</h4></td>')
				testrow.append(tempi4).appendTo( $("#x4"));
				
		}
		
		$(".dropzone").droppable({
			drop: function( event, ui ){			
				if(addProductKeyCart(ui.draggable.find('.productdraggable').attr('data-prod')))
				{
					addCartDb(ui.draggable.find('.productdraggable').attr('data-prod'));
					addcartrow(ui.draggable.find('.prodname').html(),ui.draggable.find('.productdraggable').attr('data-prod'));
				}
				else
				{
					updateAddCartDb(ui.draggable.find('.productdraggable').attr('data-prod'));
				}
			}
		});
		
		function productjson2(data)
		{
			var obj = jQuery.parseJSON(data);
			jQuery.each(obj,function(key,value){
				
				var imgdiv = $("<div>").html('<div class="col-xs-3"><a href="#" class="thumbnail"><img src="../images/ProductImages/'+ value.product_id +'/'+ value.product_id +'.jpg" style="min-height:250px;max-height:250px;"></a></div>');
				var namediv = $("<div>").html('<div class="col-xs-4" ><h3><a class="prodname" href="#">'+ value.product_name +'</a></h3><hr><h5>'+ value.product_description+'</h5><h4><a class="pull-right" href="#">Full Description</a></h4></div>');
				var price = $("<h4>").html('<h4>Price : <i class="fa fa-rupee"></i>&nbsp;'+ value.unit_price +'</h4>');
				
				if(value.unit_in_stock > 0 )
				{
					var available = $("<h4>").html('<h4 class="text-success">Available In Stock</h4>');
				}
				else
				{
					var available = $("<h4>").html('<h4 class="text-danger">Out Of Stock</h4>');
				}
				
				var rating = $("<h4>").html('<h3 style="color:green"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i><i class="fa fa-star-o"></i></h3>');
				var seller = $("<h4>").html('<h4> Seller: <a href="#">'+value.shop_name+'</a></h4><h4><a href="#">See Customer Feedback</a></h4>');
				var prodbody = $("<div>");
				prodbody.html("<div class='col-xs-3' style='border-right:2px solid #428BCA'>" + rating.html() + price.html() + available.html() + seller.html() + '</div>');
				prodbody.append('<div class="col-xs-2" style="margin-top:45px;"><button style="width:100%" class="shopbtn btn btn-success"><i class="fa fa-shopping-cart"></i>&nbsp;Add To Cart</button><br><br><button style="width:100%" class="btn btn-info"><i class="fa fa-magic"></i>&nbsp;Wishlist</button><br><br></div>');
				
				var fullprod = $('<div class="panel panel-primary productdraggable" data-prod="'+ value.product_id +'"></div>');
				var panelbody = $('<div class="panel-body"></div>');
				panelbody.append(imgdiv.html());
				panelbody.append(namediv.html());
				panelbody.append(prodbody.html());
				fullprod.append(panelbody);
				$("#prodgrid").append(fullprod);
			});
		}
		
		function productjson(data)
		{
			var obj = jQuery.parseJSON(data);
			jQuery.each(obj,function(key,value){
				var imgdiv = $("<div>").html('<div class="col-xs-12"><a href="#" class="thumbnail"><img src="../images/ProductImages/'+ value.product_id +'/'+ value.product_id +'.jpg" style="min-height:250px;max-height:250px;"></a></div>');
				var namediv = $("<div>").html('<div class="col-xs-12"  style="margin-top:-15px;border-bottom:1px solid gray"><h3><a class="prodname" href="#">'+ value.product_name +'</a></h3></div>');
				var price = $("<h4>").html('<h4>Price : <i class="fa fa-rupee"></i>&nbsp;'+ value.unit_price +'</h4>');
				if(value.unit_in_stock > 0 )
				{
					var available = $("<h4>").html('<h5 class="text-success">Available In Stock</h5>');
				}
				else
				{
					var available = $("<h4>").html('<h5 class="text-danger">Out Of Stock</h5>');
				}
				var rating = $("<h4>").html('<h4 style="color:green"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i><i class="fa fa-star-o"></i></h4>');
				var prodbody = $("<div>");
				prodbody.html("<div class='panel-body'>" + imgdiv.html() + namediv.html() + "<div class='col-xs-12'>" + price.html() + available.html() + rating.html() + '</div><div style="left:-20px;"class="col-xs-6"><button class="shopbtn btn btn-success"><i class="fa fa-shopping-cart"></i>&nbsp;Add To Cart</button></div><div style="right:-3px;"class="col-xs-6"><button class="wishbtn btn btn-info"><i class="fa fa-magic"></i>&nbsp;Wishlist</button></div></div>');
				var fullprod = $("<div>");
				fullprod.html("<div class='col-xs-4'><div class='panel panel-primary productdraggable' data-prod="+value.product_id +">" + prodbody.html() + "</div></div>");
				fullprod.draggable({scroll:false,revert:false,zIndex:2000,cursorAt:{left:10,right:10,top:10},container:"body",helper:function(){return $('<div class="bg-primary" style="min-width:200px;border:2px solid green;padding:2px"><h4>You are Adding '+ value.product_name +' To Your Cart</h4></div>');},opacity:"1"});
				$("#prodgrid").append(fullprod);
			
			});
		}
		function togcart(){
			if($('#x2').attr('dim-vis')=='1')
			{
				$('#x2').slideDown('slow');
				$('#x2').attr('dim-vis','2');
			}
			else
			{
				$('#x2').slideUp('slow');
				$('#x2').attr('dim-vis','1');
			}
		}
		$('#x1').click(function (){
			togcart();
		});
		$(document).on('click','.addqt',function(){
			addQuantityToCart($(this));
			updateCartDb($(this));
			
		});
		$(document).on('click','.rmqt',function(){
			removeFromCart($(this));
		});
		$(document).on('click','.subqt',function(){
			subQuantityFromCart($(this));
			updateCartDb($(this));
			
		});
		$(document).on('click','.shopbtn',function(){
			var parentdiv=$(this).parents('.productdraggable');
			var productid = parentdiv.attr('data-prod');
			var productname = parentdiv.find('.prodname').html();
			if(addProductKeyCart(productid))
			{
				addCartDb(productid);
				addcartrow(productname,productid);
			}
			else
			{
				updateAddCartDb(productid);
			}
			alert('Product : '+productname+' Is Added To Your Cart');
		});
		function populateCart(data)
		{
			var obj = jQuery.parseJSON(data);
			jQuery.each(obj,function(key,value){
				if(addProductKeyCart(value.product_id))
				{
					addcartrow(value.product_name,value.product_id);
				}
				for(var i=1;i<parseInt(value.quantity);i++)
				{
					addProductKeyCart(value.product_id);
				}
			});
		}
		
