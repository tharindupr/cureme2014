<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Question
 *
 * @author Viranga Mahesh
 */
class Question {
    //put your code here
    private $questionID;
    private $question;
    private $replyRecieved;
    private $datePosted;
	
	public function __construct($question=null){
		$this->_db=DB::getInstance();
	}
	
	public function create($fields=array()){
		if(!($this->_db->insert('question',$fields))){
		
			throw new Exception('There was a problem creating an account');
		
		}
	}
    
    public function setQuestionID($questionID){
        $this->questionID=$questionID;
        
    }
    public function getQuestionID(){
        return $this->questionID;
        
    }
    public function setQuestion($question){
        $this->question=$question;
        
    }
    public function getQuestion(){
        return $this->question;
        
    }
    public function setReplyRecieved($replyRecieved){
        $this->replyRecieved= $replyRecieved;
        
    }
    public function getReplyRecieved(){
        return $this->replyRecieved;
        
    }
    public function setDatePosted($datePosted){
        $this->datePosted=$datePosted;
        
    }
    public function getDatePosted(){
        return $this->datePosted;
        
    }
    public function editQuestion($questionID, $question) {
        if ($questionID == $this->getQuestionID()) {
            $this->setQuestion($question);
        }
    }
    public function alertDoctor() {
        
    }
    
}
