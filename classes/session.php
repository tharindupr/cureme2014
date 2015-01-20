<?php
class Session{

	//checking for existing sessions if have return
	public static function exists($name){
	
		return (isset($_SESSION[$name])) ? true : false;
	
	}
	//puting the seesion into session varibale
	public static function put($name,$value){
		return $_SESSION[$name]=$value;
	}
	
	public static function get($name){
		return($_SESSION[$name]);
	
	}
	
	public static function delete($name){
	if(self::exists($name)){
		unset($_SESSION[$name]);
	}
	
	}
	
	
}



?>