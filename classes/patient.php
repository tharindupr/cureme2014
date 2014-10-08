<?php

/**
 * Description of Patient
 *
 * @author Viranga Mahesh
 */
class Patient{
	
	
	
	
    //put your code here
	private $_db;
	
	public function __construct($patient=null){
		$this->_db=DB::getInstance();
	}
	
	public function create($fields=array()){
		if(!($this->_db->insert('patient',$fields))){
		
			throw new Exception('There was a problem creating an account');
		
		}
	}
	
	public function getKey()
	{
		$this->_db->query('SELECT MAX(patient_Id) FROM patient;',array());
					
			$a=(($this->_db->results()[0]));
			$key=0;
			foreach ($a as $key => $object) {
				$key=intval($object);
			}
			
		return(++$key);	
	}
    
    
}
