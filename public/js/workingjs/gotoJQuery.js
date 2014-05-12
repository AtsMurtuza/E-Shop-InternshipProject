/*
	Author : Murtuza Dawoodi Sugarwala
	Date : 25th January 2014
	This JQuery is useful to perform the scroll up and down operation

*/
			
			
			$(document).ready(function(){
				$('#goToBottom').click(function()
				{
					if($('#goToHidden').val()=="0")
					{
						$('html,body').animate({scrollTop: $('#bodySectionDiv').position().top},2000);
					}
					else
					{
						$('html,body').animate({scrollTop: 0},2000);
					}
				});
			});
			
			$(document).ready(function(){
				$(document).scroll(function(){
					var scroll_top = $(window).scrollTop();
					if(scroll_top > 400)
					{
						$('#goToHidden').val("1");
						$('#goToIcon').removeClass();
						$('#goToIcon').addClass("glyphicon glyphicon-arrow-up");
					}
					else
					{
						$('#goToHidden').val("0");
						$('#goToIcon').removeClass();
						$('#goToIcon').addClass("glyphicon glyphicon-arrow-down");
					}
				});
			});