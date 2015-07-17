<?php
require './Car.class.php';

class CarDecorator extends AbstractCar {
	private $target;
	
	function __construct(Car $target) {
		$this->target = $target;
	}
	
	public function getPrice() {
		return $this->target->getPrice();
	}
	
	public function getManufacturer() {
		return $this->target->getManufacturer();
	}
}

?>