<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comment
 *
 * @author Viranga Mahesh
 */
class Comment {
    //put your code here
    private $commentID;
    private $comment;
    private $reply;
    
    public function setCommentID($commentID){
        $this->commentID=$commentID;
        
    }
    public function getCommentID(){
        return $this->commentID;
        
    }
    public function setComment($comment){
        $this->comment=$comment;
        
    }
    public function getComment(){
        return $this->comment;
        
    }
    public function setReply($reply){
        $this->reply=$reply;
        
    }
    public function getReply(){
        return $this->reply;
        
    }
    
    public function editComment($commentID,$comment) {
        if ($commentID== $this->getCommentID()) {
            $this->setComment($comment);
            
        }
    }
    
}
