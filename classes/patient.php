<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Patient
 *
 * @author Viranga Mahesh
 */
class Patient extends Person{
    //put your code here
    private $patientID;
    private $history;
    private $contactPerson;
    
    public function setPatientID($patientID){
        $this->patientID=$patientID;
        
    }
    public function getPatientID(){
        return $this->patientID;
        
    }
    public function setHistory(History $history){
        $this->history=$history;
        
    }
    public function getHistory(){
        return $this->history;
        
    }
    public function setContactPerson(Person $person){
        $this->contactPerson=$person;
        
    }
    public function getContactPerson(){
        return $this->contactPerson;
        
    }
    public function changeContactPerson(Person $newPerson,  Person $oldPerson) {
        if($this->getContactPerson()==$oldPerson){
            $this->setContactPerson($newPerson);
        }
    }
    public function createCase($caseID, $caseType, $caseDate) {
        $myCaseof = new CaseOf();
        $myCaseof->setCaseID($caseID);
        $myCaseof->setCaseType($caseType);
        $myCaseof->setCaseDate($caseDate);
        return $myCaseof;
    }
    public function createReport($reportID,  DateTime $submitedDate, $reportType,  DateTime $submitedTime) {
        $myReport = new Report();
        $myReport->setReportID($reportID);
        $myReport->setSubmitedDate($submitedDate);
        $myReport->setReportType($reportType);
        $myReport->setSubmitedTime($submitedTime);
        
        return $myReport;
    }
    public function createQuestion($questionID, $question, $replyRecieved,  DateTime $datePosted) {
        $myQuestion = new Question();
        $myQuestion->setQuestionID($questionID);
        $myQuestion->setQuestion($question);
        $myQuestion->setReplyRecieved($replyRecieved);
        $myQuestion->setDatePosted($datePosted);
        
        return $myQuestion;
    }
    public function createAppoinment($appoinmentNo,  DateTime $time,  DateTime $date, $comment) {
        $myAppoinment = new Appoinment();
        $myAppoinment->setAppoinmentNo($appoinmentNo);
        $myAppoinment->setTime($time);
        $myAppoinment->setDate($date);
        $myAppoinment->setComment($comment);
        
        return $myAppoinment;
        
    }
    
}
