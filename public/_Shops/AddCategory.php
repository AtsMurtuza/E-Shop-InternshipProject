<html>
	<head>
		<title>E-Shop Admin Home</title>
		<?php require_once('_css-include.php'); ?>
		<style type="text/css">
			.ats-a
			{
				color:#fff;
			}
			.ats-a:hover
			{
				color:#080808;
				
			}
			
		</style>
		
		<style type="text/css">
			
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
		</style>
	</head>
	<body>
	<div id="wrapper">
		<?php require_once('DashboardMain.php'); ?>
		<div id="page-wrapper">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Category</a></li>
				<li class="active">Add Category</li>
			</ol>
			<div id="requestresult"></div>
		 <form id="SingleProd" class="horizontal-form" role="form">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 style="text-align:center">Add a New Category</h4>
					</div>
					<div class="panel-body">
						<div class ="col-md-2" style="text-align:center;">
							  <label for="dropdown">Parent Category</label>	
							<div class="btn-group" style = "margin-left:25px;">
							  <button type="button" id="category_name_btn" class="btn btn-danger btn-lg dropdown-toggle" data-toggle="dropdown">
								Select Parent <span class="caret"></span>
							  </button>
							  <ul id ="CategorySelect" name="CategorySelect" class="dropdown-menu multi-level" role="menu" style="text-align:left;">
								<li data-val="0"><a id="0" class="dropli">Master</a></li>
							  </ul>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label for="dropdown">Category Name</label>
								<input type="textbox" placeholder="Category Name" name="CategoryName" id="CategoryName" class="form-control" required>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label for="dropdown">Category Description</label>
								<input type="textbox" placeholder="Category Description" name="CategoryDescription" id="CategoryDescription" class="form-control" required></textarea>
							</div>
						</div>
							
						<div class="col-md-1">	
					    <div style="text-align:center;">
							<button style="position:relative;top:14;" type="button" class="btn btn-lg btn-success" id="saveCategory" >Save New Category</button>
						</div>
						</div>	
					</div>
				</div>
			</div>
		 </form>
		</div>
		
		<div id="trialJson" class="col-xs-12">
		</div>
	</div>
		<?php require_once('_js-include.php'); ?>
		<script type="text/javascript">
		
			$(document).ready(jsonCategory());
			
			
			function jsonCategory(){
				var ajxr = $.post("../../controller/ParentCategory.php",function(data){
					//$('#trialJson').html(data);
					
					var obj = jQuery.parseJSON(data);
					var startid = obj[0].parent_id;
					var ulid = $('#CategorySelect');
					jQuery.each(obj,function(key,value)
					{
						if(value.parent_id==startid)
						{
							ulid.append("<li data-val="+value.category_id+"><a class='dropli' href='#'>"+value.category_name+"</a></li>");
						}
						else
						{
							startid = value.parent_id;
							var tempulid =  $('#CategorySelect').find('li');
							tempulid.each(function(){
								if($(this).attr('data-val')==value.parent_id)
								{
									$(this).attr('class','dropdown-submenu ');
									$(this).append("<ul class='dropdown-menu'></ul>");
									ulid = $(this).find('ul').first();
									ulid.append("<li data-val="+value.category_id+"><a class='dropli' href='#'>"+value.category_name+"</a></li>");
								}
							});
							
						}
					});
				});		
			}
			
			$(document).on("click",".dropli",function(){
				//alert($(this).html());
				$('#category_name_btn').html($(this).html() + "&nbsp;<span class='caret'></span>");
				$('#category_name_btn').attr('class','btn btn-success btn-lg dropdown-toggle');
				$('#category_name_btn').attr('data-val',$(this).parent('li').attr('data-val'));
				//alert($(this).parent('li').attr('data-val'));
			});
			
			$("#SingleProd").validate({
				onkeyup: false,
				onfocusout: false,
				rules:{
					CategoryName:{
						required: true,
						remote: {
							url: "../../controller/CheckCategory.php",
							type: "post",
							data : {
								category_name : function()
								{
									return $("#CategoryName").val();
								}
							}
						}
					},
					CategoryDescription:{
						required: true
					}
				},
				messages:{
					CategoryName:{
						required: "Please Enter Category Name",
						remote: jQuery.validator.format("{0} category already exists.")
					},
					CategoryDescription:{
						required: "Please Enter Description"
					}
				},
				errorPlacement : function(error,element){
					element.attr('data-container','body');
					element.attr('data-toggle','popover');
					element.attr('data-placement','bottom');
					element.attr('data-html','true');
					element.attr('data-content',"<i style='color:red' class='fa fa-exclamation-triangle'></i>&nbsp;" + error.text());
					element.popover('show');
				}
				
			});
		
		$("#saveCategory").click(function(){
			if($("#SingleProd").valid() && $("#category_name_btn").attr('data-val'))
			{
				var jpost = $.post("../../controller/AddCategory.php",{
					CategoryName:$("#CategoryName").val(),
					CategoryDescription:$("#CategoryDescription").val(),
					ParentID:$("#category_name_btn").attr('data-val')},
					function(data){
						$('#requestresult').removeClass();
						$('#requestresult').addClass('alert alert-success');
						$('#requestresult').html('<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>  <h4 style="text-align:center;"> Cool ! You Just Added A New Category : <b>' + $("#CategoryName").val() + '</b></h4>');
						$("#CategoryName").val("");
						$("#CategoryDescription").val("");
						$("#category_name_btn").html('Select Parent  <span class="caret"></span>');
						$('#category_name_btn').attr('class','btn btn-danger btn-lg dropdown-toggle');
						$('#CategorySelect').html('<li data-val="0"><a id="0" class="dropli">Master</a></li>');
						jsonCategory();
					}); 
			}
			else
			{
				$('#requestresult').removeClass();$('#requestresult').addClass('alert alert-danger');
				$('#requestresult').html('<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>  <h4 style="text-align:center;">Sorry You Need To Select A Parent</h4>');
						
			}
		});
		</script>
	</body>
</html> 