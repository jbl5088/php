<?php
require './AbstractCar.class.php';

class Car extends AbstractCar {
	private $price =  16000;
	private $manufacturer = "Acme Autos";
	
	public function getPrice() {
		return $this->price; 
	}
	
	public function getManufacturer() {
		return $this->manufacturer;
	}
}
?>