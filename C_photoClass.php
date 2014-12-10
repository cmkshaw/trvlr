<?php

class PhotoColumns {
	
	private $PhotoID;
	private $Name;
	private $Path;
	private $Caption;
	private $ActivityID;
	
	
	public function __construct($PhotoID, $Name, $Path, $Caption, $ActivityID) {
        
		$this-> PhotoID = $PhotoID;
                $this-> Name = $Name;
		$this-> Path = $Path;
		$this-> Caption = $Caption;
		$this-> ActivityID = $ActivityID;	
		
    }
	
	public function getPhotoID() {
        return $this->PhotoID;
    }
	
	public function setPhotoID($value) {
        $this->PhotoID = $value;
    }
	
	public function getName() {
        return $this->Name;
    }
	
	public function setName($value) {
        $this->Name = $value;
    }
	
	public function getPath() {
        return $this->Path;
    }
	
	public function setPath($value) {
        $this->path = $value;
    }
	
	public function getCaption() {
        return $this->Caption;
    }
	
	public function setCaption($value) {
        $this->Caption = $value;
    }
	
	
	public function getActivityID() {
        return $this->ActivityID;
    }
	
	public function setActivityID($value) {
        $this->ActivityID = $value;
    }
		
}

?>
