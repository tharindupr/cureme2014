<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Case
 *
 * @author Viranga Mahesh
 */
class CaseOf {
//put your code here
    private $caseID;
    private $caseType;
    private $caseDate;
    
    public function setCaseID($caseID){
        $this->caseID=$caseID;
        
    }
    public function getCaseID(){
        return $this->caseID;
        
    }
    public function setCaseType($caseType){
        $this->caseType=$caseType;
        
    }
    public function getCaseType(){
        return $this->caseType;
        
    }
    public function setCaseDate(DateTime $caseDate){
        $this->caseDate=$caseDate;
        
    }
    public function getCaseDate(){
        return $this->caseDate;
        
    }
    public function editCase($caseID, $caseType, DateTime $caseDate) {
        if ($caseID == $this->getCaseID()) {
            $this->setCaseType($caseType);
            $this->setCaseDate($caseDate);
            
        }
    }
    
}
