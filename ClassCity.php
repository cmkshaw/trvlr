<?php

class CityColumns {
	
	private $cityID;
	private $name;
	private $description;
	private $cityImage;
	
	public function __construct($cityID, $name, $description, $cityImage) {
        
		$this-> CityID = $cityID;
        $this-> Name = $name;
		$this-> Description = $description;
		$this-> CityImage = $cityImage;
    }
	
	public function getCityID() {
        return $this->CityID;
    }
	
	public function setCityID($value) {
        $this->CityID = $value;
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
	
	public function getCityImage() {
        return $this->CityImage;
    }
	
	public function setCityImage($value) {
        $this->CityImage = $value;
    }
	
}

?>