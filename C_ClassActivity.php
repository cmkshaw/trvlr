<?php

class ActivityColumns {
	
	private $ActivityID;
	private $name;
	private $description;
	private $optionID;
	private $rating;
	private $userID;
	private $approval;
	
	public function __construct($ActivityID, $name, $description, $optionID, $rating, $userID, $approval) {
        
		$this-> ActivityID = $ActivityID;
                $this-> Name = $name;
		$this-> Description = $description;
		$this-> OptionID = $optionID;
		$this-> Rating = $rating;
		$this-> UserID = $userID;
		$this-> Approval = $approval;
		
    }
	
	public function getActivityID() {
        return $this->ActivityID;
    }
	
	public function setActivityID($value) {
        $this->ActivityID = $value;
    }
	
	public function getName() {
        return $this->Name;
    }
	
	public function setName($value) {
        $this->Name = $value;
    }
	
	public function getDescription() {
        return $this->Description;
    }
	
	public function setDescription($value) {
        $this->Description = $value;
    }
	
	public function getOptionID() {
        return $this->OptionID;
    }
	
	public function setOptionID($value) {
        $this->OptionID = $value;
    }
	
	
	public function getRating() {
        return $this->Rating;
    }
	
	public function setRating($value) {
        $this->Rating = $value;
    }
	
	public function getUserID() {
        return $this->UserID;
    }
	
	public function setUserID($value) {
        $this->UserID = $value;
    }
	
	public function getApproval() {
        return $this->Approval;
    }
	
	public function setApproval($value) {
        $this->Approval = $value;
    }
	
}

?>