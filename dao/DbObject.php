<?php
/*
	Author: Murtuza Dawoodi Sugarwala
	Version : 1.0
	Current Version Date : 28th Feb 2014
	Revision History: NONE
	
	// DbObject
	
	--Details--
	
	
*/
	require_once('DbClass.php');
	require_once('QueryConst.php');
	class DbObject
	{
		protected static $table_name;
		protected static $object_vars;
		public static function find_all($query){
			global $querymaker;
			$query = $querymaker->makeQuery($query);
			return self::find_by_sql($query);
		}
		public static function add_to_db($query){
			global $querymaker;
			$arr = array();
			for($i=1;$i<func_num_args();$i++)
			{
				$arr[] = func_get_Arg($i);
			}
			$query = $querymaker->makeQuery($query,$arr);
			$result = self::perform_sql($query);
			return $result;
		}
		public static function update_to_db($query){
			global $querymaker;
			$arr = array();
			for($i=1;$i<func_num_args();$i++)
			{
				$arr[] = func_get_Arg($i);
			}
			$query = $querymaker->makeQuery($query,$arr);
			$result = self::perform_sql($query);
			return $result;
		}
		public static function delete_from_db($query)
		{
			global $querymaker;
			$arr = array();
			for($i=1;$i<func_num_args();$i++)
			{
				$arr[] = func_get_Arg($i);
			}
			$query = $querymaker->makeQuery($query,$arr);
			$result = self::perform_sql($query);
			return $result;
		}
		public static function find_by_id($query,$id){
			global $querymaker;
			$arr = array();
			$arr[] = $id;
			$query = $querymaker->makeQuery($query,$arr);
			//echo $query;
			$result = self::find_by_sql($query);
			return !empty($result) ? array_shift($result):false;
		}
		public static function search_db($query){
			global $querymaker;
			$arr = array();
			for($i=1;$i<func_num_args();$i++)
			{
				$arr[] = func_get_Arg($i);
			}
			$query = $querymaker->makeQuery($query,$arr);
			$result = self::find_by_sql($query);
			return !empty($result) ? $result:false;
		}
		public static function perform_sql($sql){
			global $db;
			$result = $db->perform_query($sql);
			return $result;
		}
		
		public static function find_by_sql($sql){
			global $db;
			$result = $db->perform_query($sql);
			static::set_obj_vars();
			$object_array = array();
			while($row = $db->fetch_array($result))
			{
				$object_array[] = self::setValues($row);
			}
			return $object_array;
		}
		
		
		public static function setValues($record){
			$class_name = get_called_class();
			$object = new $class_name;
			//echo $class_name;
			foreach($record as $attribute=>$value)
			{
				//echo "{$attribute} = {$value}","<br>";
				if($object->has_attribute($attribute))
				{
					$object->$attribute = $value;
					
				}
			}
			
			return $object;
		}
		private static function set_obj_vars()
		{
			$class_name = get_called_class();
			$object = new $class_name;
			static::$object_vars = get_object_vars($object);
		}
		private function has_attribute($attribute){
			return array_key_exists($attribute,static::$object_vars);
		}
	}
?>