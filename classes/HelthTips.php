<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HelthTips
 *
 * @author Viranga Mahesh
 */
class HelthTips {
    //put your code here
    private $tipID;
    private $tip;
    private $recivers;
    
    public function setTipID($tipID){
        $this->tipID=$tipID;
        
    }
    public function getTipID(){
        return $this->tipID;
        
    }
    public function setTip($tip){
        $this->tip=$tip;
        
    }
    public function getTip(){
        return $this->tip;
        
    }
    public function setRecivers($recivers){
        $this->recivers=$recivers;
        
    }
    public function getRecivers(){
        return $this->recivers;
        
    }
    public function editTip($tipID, $tip, $recivers) {
        if ($tipID== $this->getTipID()) {
            $this->setTip($tip);
            $this->setRecivers($recivers);
        }
            
    }
    
    
}
