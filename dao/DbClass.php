<?php
/*
	Author: Murtuza Dawoodi Sugarwala
	Version : 1.0
	Current Version Date : 28th Feb 2014
	Revision History: NONE
	
	--Details--
	
	Attributes:-
	
	1) 	Name: connection
		Type: private
		Description: Creates the connection between the Database and the Web-app
		
	2) 	Name: last_query
		Type: public static
		Description: Saves the last query that is fired
	
	Methods:-
	1) 	Name: __construct
		Parameters: 0
		Type : public
		Description: Used to open the database connection 

	2) 	Name: open_connection
		Parameters: 0
		Type : public
		Description: Used to open the connection with the database, assign a value to the connection attribute of the DAO class and to return errors if the database could not be connected due to some reason
	
	3) 	Name: close_connection
		Parameters: 0
		Type : public
		Description: Used to close the connection with the database and unset the connection attribute of the DAO class

	4) 	Name: perform_query
		Parameters: 1-> string
		Type : public
		Description: Used to fire a query in the database and return the result set
	
	
	5) 	Name: fetch_array
		Parameters: 1-> Result Set
		Type : public
		Description: Used to call mysql_fetch_array($result)

	6) 	Name: num_rows
		Parameters: 1-> Result Set
		Type : public
		Description: Used to call mysql_num_rows($result)

	7) 	Name: insert_id
		Parameters: 0
		Type : public
		Description: Used to call mysql_insert_id($connection)

	8) 	Name: affected_rows
		Parameters: 0
		Type : public
		Description: Used to call mysql_affected_rows($connection)

*/
	require_once("..\util\dbConfig.php");
	class DAO
	{
		private $connection;
		public static $last_query;
		
		function __construct(){
			$this->open_connection();
		}
		public function open_connection(){
			$this->connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
			if(!$this->connection)
			{
				die("Database Connection Has Failed : ". mysql_error());
			}
			else
			{
				$db_select = mysql_select_db(DB_NAME,$this->connection);
				if(!$db_select)
				{
					die("Database Selection Has Failed : ". mysql_error());
				}
			}
		}
		public function close_connection(){
		
			if(isset($this->connection))
			{
				mysql_close($this->connection);
				unset($this->connection);
			}
		}
		public function perform_query($sql_query){
			self::$last_query = $sql_query;
			$result = mysql_query($sql_query,$this->connection);
			if(!$result)
			{	
				//echo "The Following Query Failed ",$last_query; 
				die("Database Query Has Failed : ".mysql_error());
			}
			return $result;
		}
		
		public function fetch_array($result){
			return mysql_fetch_array($result);
		}
		public function num_rows($result){
			return mysql_num_rows($result);
		}
		public function insert_id(){
			return mysql_insert_id($this->connection);
		}
		public function affected_rows(){
			return mysql_affected_rows($this->connection);
		}
	}
	$db = new DAO();
?>