<?php
//require_once '../core/init.php';
/**
 * Description of pharmasist
 *
 * @author Viranga Mahesh
 */
class Pharmasist{
	
	
	
	
    //put your code here
	private $_db,$_data;
	
	public function __construct($pharmasist=null){
		$this->_db=DB::getInstance();
	}
	
	public function create($fields=array()){
		print_r($fields);
		if(!($this->_db->insert('pharmasist',$fields))){
		
			throw new Exception('There was a problem creating an account');
		
		}
	}
	
//////////////////////////////
	
	
	public function update($fields){
		print_r($fields);
		$rslt=$this->_db->updatePharmasist('pharmasist',$fields['pharmacy_Id'],$fields);
		
		if($rslt){
		
			throw new Exception('There was a problem updating this account');
		
		}else{
			echo "success";
		}
	}
	
////////////////////////////////////////	
	
	public function getKey()
	{
		$this->_db->query('SELECT MAX(pharmacy_Id) FROM pharmasist;',array());
					
			$a=(($this->_db->results()[0]));
			$key=0;
			foreach ($a as $key => $object) {
				$key=intval($object);
			}
			
		return(++$key);	
	}
	
	public function find($user=null){
		if($user){
		 
		 $data=$this->_db->get('pharmasist',array('email','=',$user));
			
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
				Session::put('pharmasist',$this->data()[0]);
				
				return(true);
			}
			
			
		}
	
		return(false);
	}
	
	public function logout(){
		
			Session::delete('pharmasist');
			
	
	}
	
	public function data(){
		return $this->_data;
	}
    
    
}
