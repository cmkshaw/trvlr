<?php

class MapColumns {
	
	private $MapID;
	private $name;
	private $address;
	private $lat;
	private $long;
	private $ActivityID;
	
	
	public function __construct($MapID, $name, $address, $lat, $long, $ActivityID) {
        
		$this-> MapID = $MapID;
                $this-> name = $name;
		$this-> address = $address;
		$this-> lat = $lat;
		$this-> long = $long;
		$this-> ActivityID = $ActivityID;	
		
    }
	
	public function getMapID() {
        return $this->MapID;
    }
	
	public function setMapID($value) {
        $this->MapID = $value;
    }
	
	public function getname() {
        return $this->name;
    }
	
	public function setname($value) {
        $this->name = $value;
    }
	
	public function getaddress() {
        return $this->address;
    }
	
	public function setaddress($value) {
        $this->address = $value;
    }
	
	public function getlat() {
        return $this->lat;
    }
        public function setlat($value) {
        $this->lat = $value;
    }	
   
    public function getlong() {
        return $this->long;
    }
    
	public function setlong($value) {
        $this->long = $value;
    }
	
	
	public function getActivityID() {
        return $this->ActivityID;
    }
	
	public function setActivityID($value) {
        $this->ActivityID = $value;
    }
		
}

?>
