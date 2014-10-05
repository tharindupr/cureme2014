<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of History
 *
 * @author Viranga Mahesh
 */
class History {
    //put your code here
    private $patientID;
    private $lastUpdateDate;
    private $age;
    
    public function setPatientID($patientID){
        $this->patientID=$patientID;
        
    }
    public function getPatientID(){
        return $this->patientID;
        
    }
    public function setLastUpdateDate($lastUpdateDate){
        $this->lastUpdateDate=$lastUpdateDate;
        
    }
    public function getLastUpdateDate(){
        return $this->lastUpdateDate;
        
    }
    public function setAge($age){
        if ($age>0) {
            $this->age=$age;
        }
    }
    public function getAge(){
        return $this->age;
    }
    public function addCase(CaseOf $case) {
        
    }
    public function deleteCase(CaseOf $case) {
        
    }
        
    
    
}
