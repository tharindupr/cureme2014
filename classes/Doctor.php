<?php

/**
 * Description of Doctor
 *
 * @author Hiran Eranda
 */
class Doctor{
	
	
	
	
    //put your code here
	private $_db,$_data;
	
	public function __construct($doctor=null){
		$this->_db=DB::getInstance();
	}
	
	public function create($fields=array()){
		if(!($this->_db->insert('doctor',$fields))){
		
			throw new Exception('There was a problem creating an account');
		
		}
	}
	
	public function update($id,$fields)
	{
		$this->_db->updateDoctor('doctor',$id,$fields);
		//$this->_db->query('UPDATE doctor SET doctor_FName = ? WHERE doctor_Id=100000',array("doctor_FName"=>"Tharindddd"));
		/*if(!($this->_db->update('doctor',$id,$fields))){
		
			throw new Exception('There was a problem creating an account');
		
		}*/
		
	}
	
/*	public function update($id,$fields=array()){
		if(!($this->_db->updateDoctor('doctor',$id,$fields))){
		
			throw new Exception('There was a problem in updating account');
		
		}
	}
*/	
	
	public function find($user=null){
		if($user){
		 
		 $data=$this->_db->get('doctor',array('email','=',$user));
			
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
			if($this->data()[0]->password===$password){
				Session::put('doctor',$this->data()[0]);
				
				return(true);
			}
			
			
		}
	
		return(false);
	}
	
	public function logout(){
		
			Session::delete('doctor');
			header('Location: ../../index/index.php');
	
	}
	
	public function data(){
		return $this->_data;
	}
    
    
}
?>