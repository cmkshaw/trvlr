<?php

class CategoryColumns {
	
	private $categoryID;
	private $name;
	private $alias;
	private $cityID;
	private $description;
	private $categoryImage;
	
	public function __construct($categoryID, $name, $alias, $description, $cityImage, $cityID) {
        
		$this-> CityID = $categoryID;
        $this-> Name = $name;
		$this-> Alias = $alias;
		$this-> Description = $description;
		$this-> CityImage = $cityImage;
		$this-> CityID = $cityID;
    }
	
	public function getCategoryID() {
        return $this->CategoryID;
    }
	
	public function setCategoryID($value) {
        $this->CategoryID = $value;
    }
	
	public function getName() {
        return $this->Name;
    }
	
	public function setName($value) {
        $this->Name = $value;
    }
	
	public function getAlias() {
        return $this->Alias;
    }
	
	public function setAlias($value) {
        $this->Alias = $value;
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
        $this->CityImageID = $value;
    }
	
	public function getCityID() {
        return $this->CityID;
    }
	
	public function setCityID($value) {
        $this->CityID = $value;
    }
	
}

?>