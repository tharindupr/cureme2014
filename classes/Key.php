<?php

class Key{
 
	private $_db;
	
	
	public function __construct($patient=null){
		$this->_db=DB::getInstance();
	}
	
	public function	getkey(){
		$row=$this->_db->query('SELECT * FROM patient WHERE patient_FName =?',array('Tharindu'));
		print_r($row);
		echo '<script>alert("Hello");</script>';
	}

}

?>