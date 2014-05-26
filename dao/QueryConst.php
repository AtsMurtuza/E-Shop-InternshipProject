<?php

/*
	Author: Murtuza Dawoodi Sugarwala
	Version : 1.0
	Current Version Date : 28th Feb 2014
	Revision History: NONE
	
	// Queries Constants 
	
	--Details--
	
	Attributes:-
	
	1) 	Name: magic_quotes_active
		Type: private
		Description: Checks if the magic quotes are active or not
		
	2) 	Name: real_escape_string_exists
		Type: private
		Description: Checks if the mysql_real_escape_string function exists or not
	
	Methods:-
	1) 	Name: __construct
		Parameters: 0
		Type : public
		Description: Used for checking for the real escape string and the magic quotes on

	2) 	Name: escape_value
		Parameters: 1-> string
		Type : public
		Description: Used to check whether the query written is correct and does not contain any quotes and return the query
		Helpful to counter a bit of SQL injections
		
	3)	Name: make_Query
		Parameter: 1-> string
		Type : public 
		Description: Used to generate the query using the parameters and removing sql injection using escape_value function 
		
*/
require_once('Queries.php');
class QueryConst
{
	private $magic_quotes_active;
	private $real_escape_string_exists;
	function __construct()
	{
		$this->magic_quotes_active = get_magic_quotes_gpc();
		$this->real_escape_string_exists = function_exists("mysql_real_escape_string");
	}
	private function escape_value($value)
	{	
		if($this->real_escape_string_exists)
		{
			if($this->magic_quotes_active)				
			{
				$value = stripslashes($value);
			}
			$value = mysql_real_escape_string($value);
		}
		else
		{				
			if(!$this->magic_quotes_active)
			{
				$value= addslashes($value);
			}
		}
		return $value;
	}	
	public function makeQuery($query)
	{
		$query = constant($query);
		if(func_num_args()>1)
		{
		$funArgArr = func_get_Arg(1);
		$funCount = count($funArgArr);
		for($i=0;$i<$funCount;$i++)
		{						
			$arguement = $funArgArr[$i];
			$arguement = $this->escape_value($arguement);
			$query = preg_replace('/\?/',$arguement,$query,1);
		}
		}
	//	echo $query;
		return $query;
	}
}
	$querymaker = new QueryConst();
?>