<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Invoice
 *
 * @author Viranga Mahesh
 */
class Invoice {
    //put your code here
    
    private $ammountPaid;
    private $dateOfPayment;
    private $invoiceNo;
    private $description;
    
    public function setAmmontPaid($ammountPaid){
        $this->ammountPaid=$ammountPaid;
        
    }
    public function getAmmontPaid(){
        return $this->ammountPaid;
        
    }
    public function setDateOfPayment($dateOfPayment){
        $this->dateOfPayment=$dateOfPayment;
        
    }
    public function getDateOfPayment(){
        return $this->dateOfPayment;
        
    }
    public function setInvoiceNo($invoiceNo){
        $this->invoiceNo=$invoiceNo;
        
    }
    public function getInvoiceNo(){
        return $this->invoiceNo;
        
    }
    public function setDescription($description){
        $this->description=$description;
        
    }
    public function getDescription(){
        return $this->description;
        
    }
    public function sendInvoice(Pharmasist $customer) {
        $customer->paySubscription($this);
    }
    public function editInvoice($invoiceNo, $ammountPaid, $dateOfPayment, $description) {
        if ($invoiceNo == $this->getInvoiceNo()) {
            $this->setAmmontPaid($ammountPaid);
            $this->setDateOfPayment($dateOfPayment);
            $this->setDescription($description);
            
        }
        
    }
    
}
