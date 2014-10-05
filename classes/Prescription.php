<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Prescription
 *
 * @author Viranga Mahesh
 */
class Prescription {
    //put your code here
    private $priscriptionNo;
    private $patientName;
    private $dateAndTime;
    private $prescriptionDetails;
    
    public function setPrescriptionNo($prescriptionNo){
        $this->priscriptionNo=$prescriptionNo;
        
    }
    public function getPrescriptionNo(){
        return $this->priscriptionNo;
        
    }
    public function setPatientName($patientName){
        $this->patientName=$patientName;
        
    }
    public function getPatientName(){
        return $this->patientName;
        
    }
    public function setPre_DateTime($dateAndTime){
        $this->dateAndTime=$dateAndTime;
        
    }
    public function getPre_DateTime(){
        return $this->dateAndTime;
        
    }
    public function setPrescriptionDetails($prescriptionDetails){
        $this->prescriptionDetails=$prescriptionDetails;
        
    }
    public function getPrescriptionDetails(){
        return $this->prescriptionDetails;
        
    }
    
    public function editPrescription($prescriptionNo, $patientName, $dateAndTime) {
        if($this->priscriptionNo==$prescriptionNo){
            $this->setPatientName($patientName);
            $this->setPre_DateTime($dateAndTime);
        }
        
    }
    public function editDiscription($prescriptionNo, $description) {
        if($this->priscriptionNo==$prescriptionNo){
            $this->setPrescriptionDetails($description);
        }
    }
}
