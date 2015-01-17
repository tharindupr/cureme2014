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
	
	public function update($id,$fields)
	{
		$this->_db->update('prescriptions',$id,$fields);
		//$this->_db->query('UPDATE patient SET patient_FName = ? WHERE patient_Id=100000',array("patient_FName"=>"Tharindddd"));
		/*if(!($this->_db->update('patient',$id,$fields))){
		
			throw new Exception('There was a problem creating an account');
		
		}*/
		
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
