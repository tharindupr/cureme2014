<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Appoinment
 *
 * @author Viranga Mahesh
 */
class Appoinment  {
   private $_db,$_data;
	
	public function __construct($appoinment=null){
		$this->_db=DB::getInstance();
	}
	
	public function create($aid,$date,$time,$title,$description,$patientid){
		$fields=array('appoinment_Id'=>$aids,'title'=>$title,'description'=>$description,'confirmation_Flag'=>0,'Patient_patient_Id'=>$patientid,'date'=>$date,'time'=>$time,'createdDate'=>date('Y-m-d H:i:s'));
		if(!($this->_db->insert('appoinment',$fields))){
		
			throw new Exception('There was a problem creating an account');
		
		}
	}
	
	
	public function getKey()
	{
		$this->_db->query('SELECT MAX(appoinment_Id) FROM appoinment;',array());
					
			$a=(($this->_db->results()[0]));
			$key=0;
			foreach ($a as $key => $object) {
				$key=intval($object);
			}
			
		return(++$key);	
	}
    
    
    
}
