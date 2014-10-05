<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Person
 *
 * @author Viranga Mahesh
 */
class Person {
    //put your code here
    private $nicNumber;
    private $personName;
    private $personAddress;
    private $dateOfBirth;
    private $gender;
    private $email;
    private $password;
    private $contactNo;
    private $registerdDate;
    
    public function setNICnumber($nicNumber){
        $this->nicNumber=$nicNumber;
        
    }
    public function getNICnumber(){
        return $this->nicNumber;
        
    }
    
    public function setPersonName($personName){
        $this->personName=$personName;
        
    }
    public function getPersonName(){
        return $this->personName;
        
    }
    
    public function setPersonAddress($personAddress){
        $this->personAddress=$personAddress;
        
    }
    public function getPersonAddress(){
        return $this->personAddress;
        
    }
    
    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth=$dateOfBirth;
        
    }
    public function getDateOfBirth(){
        return $this->dateOfBirth;
        
    }
    
    public function setGender($gender){
        $this->gender=$gender;
        
    }
    public function getGender(){
        return $this->gender;
        
    }
    
    public function setEmail(email $email){
        $this->email=$email;
        
    }
    public function getEmail(){
        return $this->email;
        
    }
    
    public function setPassword($password){
        $this->password=$password;
        
    }
    public function getPassword(){
        return $this->password;
        
    }
    
    public function setContactNo( $contactNo){
        $this->contactNo=$contactNo;
        
    }
    public function getContactNo(){
        return $this->contactNo;
        
    }
    
    public function setRegisterdDate(DateTime $registredDate){
        $this->registerdDate=$registredDate;
        
    }
    public function getRegisterdDate(){
        return $this->registerdDate;
        
    }
    
    
    public function changePassword(password $oldPassword,$newPassword) {
        if ($oldPassword == $this->getPassword()) {
            $this->setPassword($newPassword);
        }else {
            echo 'please enter correct old password';
        }
 
    }
    public function changeEmail($password,$newEmail) {
        if($password==$this->getPassword()){
            $this->setEmail($newEmail);
        }else {
            echo 'please enter correct Password to change E-Mail'; 
        }
    }
    public function changeAddress($password,$newAddress) {
        if($password==$this->getPassword()){
            $this->setPersonAddress($newAddress);
        }else {
            echo 'please enter correct Password to change Address'; 
        }
    }
    public function editContact($newContact) {
        $this->setContactNo($newContact);
    }
    
    
}
