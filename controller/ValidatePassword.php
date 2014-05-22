<?php

	$Password = $_REQUEST['Password'];
	
	$result = preg_match("((?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})",$Password);
	
	if($result == true)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
?>