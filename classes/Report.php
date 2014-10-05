<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Report
 *
 * @author Viranga Mahesh
 */
class Report {
    //put your code here
    private $reportID;
    private $submitedDate;
    private $reportType;
    private $submitedTime;
    
    public function setReportID($reportID){
        $this->reportID=$reportID;
                    
    }
    public function getReportID(){
        return $this->reportID;
        
    }
    public function setSubmitedDate(DateTime $submitedDate){
        $this->submitedDate=$submitedDate;
        
    }
    public function getSubmitedDate(){
        return $this->submitedDate;
        
    }
    public function setReportType($reportType){
        $this->reportType=$reportType;
        
    }
    public function getReportType(){
        return $this->reportType;
        
    }
    public function setSubmitedTime(DateTime $submitedTime){
        $this->submitedTime=$submitedTime;
        
    }
    public function getSubmitedTime(){
        return $this->submitedTime;
        
    }
    
    public function changeType($reportID, $reportType) {
        if ($reportID == $this->getReportID()) {
            $this->setReportType($reportType);
            
        }
    }
    public function alertDoctor() {
        
    }
}
