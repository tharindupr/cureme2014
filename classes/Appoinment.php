<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Appoinment
 *
 * @author Viranga Mahesh
 */
class Appoinment  {
    //put your code here
    private $appoinmentNo;
    private $time;
    private $date;
    private $comment;
    
    public function setAppoinmentNo($appoinmentNo){
        $this->appoinmentNo=$appoinmentNo;
        
    }
    public function getAppoinmentNo(){
        return $this->appoinmentNo;
        
    }
    public function setTime(DateTime $time){
        $this->time=$time;
        
    }
    public function getTime(){
        return $this->time;
        
    }
    public function setDate(DateTime $date){
        $this->date=$date;
        
    }
    public function getDate(){
        return $this->date;
        
    }
    public function setComment($comment){
        $this->comment=$comment;
        
    }
    public function getComment(){
        return $this->comment;
        
    }
    public function changeDate($appoinmentNo, DateTime $date) {
        if($this->getAppoinmentNo()==$appoinmentNo){
            $this->setDate($date);
        }
        
    }
    public function changeTime($appoinmentNo, DateTime $time) {
        if($this->getAppoinmentNo()==$appoinmentNo){
            $this->setTime($time);
        }
    }
    public function alertDoctor() {
        
    }
    
    
}
