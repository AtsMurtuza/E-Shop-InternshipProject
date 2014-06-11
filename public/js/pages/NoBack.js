function noBack()
{
	window.history.forward();
}
noBack();
window.onload = noBack;
window.onpageshow = function(evt) { if (evt.persisted) noBack() }
window.onunload = function() { void (0) }
$(document).ready(function(){
	function func_redirect()
	{
		window.location.href = "LoginPortal.php";
	}
	window.setTimeout( func_redirect, 10000 );
});