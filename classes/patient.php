<?php

/**
 * Description of Patient
 *
 * @author Viranga Mahesh
 */
class Patient{
	
	
	
	
    //put your code here
	private $_db,$_data;
	
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
	
	public function find($user=null){
		if($user){
		 
		 $data=$this->_db->get('patient',array('email','=',$user));
			
		 if($data->count())
		 {
			$this->_data=$data->results(); 
			return(true);
		 }
		}
		return(false);
	}
	
	public function login($username=null,$password=null){
	
		
		$user=$this->find($username);
		
		//$pass=($this->data()[0]->password);
		
		if($user){
			if($this->data()[0]->password===Hash::make($password,$this->data()[0]->salt)){
				Session::put('patient',$this->data()[0]);
				
				return(true);
			}
			
			
		}
	
		return(false);
	}
	
	public function logout(){
		
			Session::delete('patient');
			header('Location: ../../index/index.php');
	
	}
	
	public function data(){
		return $this->_data;
	}
    
    
}
