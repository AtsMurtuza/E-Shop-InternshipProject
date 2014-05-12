<?php
/*
Author: Murtuza Dawoodi Sugarwala
Date : 2/28/2014

Methods:

1) 	Name: strip_zeros_from_date
	Parameters: 1 -> string
	Type : static
	Description: Used to remove Zeros coming in Month or Day in any date 
	Example : 1st January 2014 would look like 01/01/2014 so we change it to 1/1/2014

2) 	Name: redirect_to
	Parameters: 1 -> string
	Type : static
	Description: Used to redirect to any other page in the application if page is not found it is redirected to 404 error page in the directory.

3)	Name: write_log
	Parameters: 1-> string , 2-> string, 3-> string
	Type : static
	Description: Used to write a log into a text log file inside our current directory. It can be used for backtracking purposes.

4)	Name: view_log_contents
	Parameters: 1-> string
	Type : static
	Description: Used to view the contents inside a particular log file.
	
5)	Name: generateCreationDate
	Parameters: 0
	Type: static
	Description: Used to get currentDate
	
6)	Name: generatePassword
	Parameters: 0
	Type: static
	Description: Used to get a random Password or sequence of 8 characters
*/

class FunctionalUtility
{
	static function strip_zeros_from_date($marked_string="")
	{
		$no_zeros = str_replace('*0','',$marked_string);
		$no_zeros = str_replace('*','',$marked_string);
	}
	static function redirect_to($location=NULL)
	{
		if($location !=NULL)
		{
			header("Location: {$location}");
		}
		else
		{
			header("Location: 404.php");
		}
		exit;
	}
	static function write_log($logid,$action,$msg)
	{
		$logfile = "../logs/".$logid.".txt";
		if($handle = fopen($logfile,'a'))
		{
			$timestamp = strftime("%Y-%m-%d %H:%M:%S",time());
			$content = "{$timestamp} | {$action} : {$msg}\n";
			fwrite($handle,$content);
			fclose($handle);
		}
		else
		{
			die("Could Not Write to file");
		}
	}
	static function view_log_contents($logid)
	{	
		$logfile = "../logs/".$logid.".txt";
		
		if(file_exists($logfile) && is_readable($logfile)  && $handle = fopen($logfile,'r'))
		{
			echo "<ul> \n";
			while(!feof($handle))
			{
				$entry = fgets($handle);
				if(trim($entry)!="")
				{
					echo "<li> {$entry} </li>";
				}
			}
			echo "</ul>";
			fclose($handle);
			self::write_log($logid,"VIEWED LOGS","Log file was viewed by You");
		}
		else
		{
			die("Could Not Write to {$logid} file");
		}
	}
	static function generateCreationDate()
	{
		return date('d-m-Y \| H:i:s');
	}
	static function generatePassword()
	{
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array();
		$alphaLength = strlen($alphabet) - 1;
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}
	
}
?>