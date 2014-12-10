<?php

class ActivityColumns {
	
	private $wishlistID;
	private $wishName;
	private $activityID;
	private $userID;
	
	public function __construct($wishlistID, $wishName, $activityID, $userID) {
        $this->WishlistID = $wishlistID;
        $this->WishName = $wishName;
		$this->ActivityID = $activityID;
		$this-> UserID = $userID;
    }
	
	public function getWishlistID() {
        return $this->WishlistID;
    }
	
	public function setWishlistID($value) {
        $this->WishlistID = $value;
    }
	
	public function getWishName() {
        return $this->WishName;
    }
	
	public function setWishName($value) {
        $this->WishName = $value;
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
	
	public function getActivityID() {
        return $this->ActivityID;
    }
	
	public function setActivityID($value) {
        $this->ActivityID = $value;
    }
	
}

?>