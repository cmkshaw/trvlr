<?php

class OptionColumns {
	
	private $optionID;
	private $name;
	private $description;
	private $categoryID;
	
	public function __construct($optionID, $name, $description, $alias, $categoryID) {
        
		$this-> OptionID = $optionID;
        $this-> Name = $name;
		$this-> Alias = $alias;
		$this-> Description = $description;
		$this-> CategoryID = $categoryID;
    }
	
	public function getOptionID() {
        return $this->OptionID;
    }
	
	public function setOptionID($value) {
        $this->OptionID = $value;
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
	
	public function getCategoryID() {
        return $this->CategoryID;
    }
	
	public function setCategoryID($value) {
        $this->CategoryID = $value;
    }
	
}

?>