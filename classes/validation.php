<?php

class Validation{
	private $_passed=false,
			$_errors=array(),
			$_db=null;
			
	public function __construct(){
		$this->_db= DB::getInstance( );
	
	}
	 
	//this will validate the items array
	public function check($source,$items=array()){
		foreach($items as $item=>$rules){
			foreach($rules as $rule=>$rule_value){
			
			$value=trim($source[$item]);
			$item=escape($item);
			
			if($rule=='required' && empty($value))
				{
					$this->addError("{$item} is required</br>");
				} 
			else if(!empty($value)){
				switch($rule){
					case 'min':
						if(strlen($value)<$rule_value)
						{
						$this->addError("{$item} must be a minimum of {$rule_value} characters.</br>");
						}
						break;
					case 'max':
						if(strlen($value)>$rule_value)
						{
						$this->addError("{$item} must be maximum of {$rule_value} characters.</br>");
						}
						
						break;
					
					case 'unique':
						$check=$this->_db->get($rule_value,array($item,'=',$value));
						if($check->count()){
						 $this->addError("{$item} already exist.</br>");
						}
						break;
						
					case 'ismobile':
						if(!preg_match("/^[0][0-9]{9}$/", $value))
						{
							$this->addError("invalid mobile number.</br>");
						}
						break;
				
				}
				
				}
			}
					
		}
		
		if(empty($this->_errors))
		{
				$this->_passed=true;
		}
		return $this;
	
	}
	//adding errors to error array
	private function addError($error){
		$this->_errors[]=$error;
	}
	
	public function errors()
	{
		return ($this->_errors);
	}
	
	public function passed(){
		return $this->_passed;
	}
}