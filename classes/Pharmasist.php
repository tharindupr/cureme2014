<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pharmasist
 *
 * @author Viranga Mahesh
 */
class Pharmasist extends Person {
    //put your code here
    private $pharmacyNo;
    private $pharmacyName;
    
    public function setPharmacyNo($pharmacyNo){
        $this->pharmacyNo=$pharmacyNo;
        
    }
    public function getPharmacyNo(){
        return $this->pharmacyNo;
        
    }
    public function setPharmacyName($pharmacyName){
        $this->pharmacyName=$pharmacyName;
        
    }
    public function getPharmacyName(){
        return $this->pharmacyName;
        
    }
    public function viewPrescription(Prescription $prescription) {
        $prescription->getPrescriptionNo();
        $prescription->getPatientName();
        $prescription->getPre_DateTime();
        $prescription->getPrescriptionDetails();
    }
    
    public function conFirmPrescription(Prescription $prescription,$prescriptionNo) {
        if($prescription->getPrescriptionNo()==$prescriptionNo){
            
        }
        
    }
     
    public function paySubscription(Payment $payment) {
        
    }
    
    
    
}
