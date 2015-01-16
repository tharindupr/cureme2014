<?php
require_once '../../core/init.php';

class Prescription {
    
	private $_db,$_data;
	
	public function __construct($prescription=null){
		$this->_db=DB::getInstance();
	}
	
	public function create($fields){
	//print_r($fields);
		
		$this->_db->insert('prescriptions',$fields);
		
	}
	
	public function getKey()
	{
		$this->_db->query('SELECT MAX(prescription_Id) FROM prescriptions;',array());
					
			$a=(($this->_db->results()[0]));
			$key=0;
			foreach ($a as $key => $object) {
				$key=intval($object);
			}
			
		return(++$key);	
	}
	
    
}


?>
