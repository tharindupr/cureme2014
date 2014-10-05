<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payment
 *
 * @author Viranga Mahesh
 */
class Payment {
    //put your code here
    private $paymentID;
    private $ammount;
    private $paymentMethod;
    private $paymentDate;
    
    public function setPaymentID($paymentID){
        $this->paymentID=$paymentID;
        
    }
    public function getPaymentID(){
        return $this->paymentID;
        
    }
    public function setAmmount($ammount){
        $this->ammount=$ammount;
        
    }
    public function getAmmount(){
        return $this->ammount;
        
    }public function setPaymentMethod($paymentMethod){
        $this->paymentMethod=$paymentMethod;
        
    }
    public function getPaymentMethode(){
        return $this->paymentMethod;
        
    }
    public function setPaymentDate(DateTime $paymentDate){
        $this->paymentDate=$paymentDate;
        
    }
    public function getPaymentDate(){
        return $this->paymentDate;
        
    }
    
    public function selectPaymentMethod($paymentID, $paymentMethod) {
        if ($paymentID == $this->getPaymentID()) {
            $this->setPaymentMethod($paymentMethod);
        }
    }
    public function confirmPayment($paymentID) {
        
        
    }
}
