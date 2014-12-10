<?php

class CommentColumns {
	
	private $CommentID;
	private $Username;
	private $Date;
	private $Comment;
	private $UserID;
	private $ActivityID;
	
	
	public function __construct($CommentID, $Username, $Date, $Comment, $UserID, $ActivityID) {
        
		$this-> CommentID = $CommentID;
                $this-> Username = $Username;
		$this-> Date = $Date;
		$this-> Comment = $Comment;
		$this-> UserID = $UserID;
		$this-> ActivityID = $ActivityID;	
		
    }
	
	public function getCommentID() {
        return $this->CommentID;
    }
	
	public function setCommentID($value) {
        $this->CommentID = $value;
    }
	
	public function getUsername() {
        return $this->Username;
    }
	
	public function setUsername($value) {
        $this->Username = $value;
    }
	
	public function getDate() {
        return $this->Date;
    }
	
	public function setDate($value) {
        $this->Date = $value;
    }
	
	public function getComment() {
        return $this->Comment;
    }
	
	public function setComment($value) {
        $this->Comment = $value;
    }
	
	public function getUserID() {
        return $this->UserID;
    }
	
	public function setUserD($value) {
        $this->UserID = $value;
    }
	
	
	public function getActivityID() {
        return $this->ActivityID;
    }
	
	public function setActivityID($value) {
        $this->ActivityID = $value;
    }
		
}

?>
