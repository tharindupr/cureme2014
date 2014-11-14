<?php
require_once '../../core/init.php';

class HealthTips {
    
	private $_db,$_data;
	
	public function __construct($healthtip=null){
		$this->_db=DB::getInstance();
	}
	
	public function create($fields=array()){
		if(!($this->_db->insert('healthtip',$fields))){
		
			throw new Exception('There was a problem creating an account');
		
		}
	}
	
	public function getKey()
	{
		$this->_db->query('SELECT MAX(tip_Id) FROM healthtip;',array());
					
			$a=(($this->_db->results()[0]));
			$key=0;
			foreach ($a as $key => $object) {
				$key=intval($object);
			}
			
		return(++$key);	
	}
	
    
}


?>