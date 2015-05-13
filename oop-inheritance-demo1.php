<?php
class Car{
	public $model;
	public $maxSpeed;
	
	public function __construct($m="Car", $s = 120){
		$this->model = $m;
		$this->maxSpeed = $s;
	}
	
	public function journey($distance){
		echo "A car passed $distance km. <br/>";
	}
	
	public function showInfo(){
		echo "This is a car model = $this->model with max speed = $this->maxSpeed <br/>";
	}
}


class SportCar extends Car{
	public $acceleration;
	public $funRate;
	
	public function __construct($m ="BMW", $s=220, $a=7, $f = 0.6){
		parent::__construct($m, $s);
		$this->acceleration = $a;
		$this->funRate = $f;
	}
	
	public function showInfo(){
		parent::showInfo();
		echo "acceleration rate = $this->acceleration and fun rate = $this->funRate <br/>";
	}
}

class ElectricCar extends Car{
	public $batteryEndurance;
	public $kW;
	
	public function __construct($m = "Tesla", $s = 200, $b = 24, $k = 900){
		parent::__construct($m, $s);
		$this->batteryEndurance = $b;
		$this->kW = $k;
	}
	
	public function showInfo(){
		parent::showInfo();
		echo "endurance = $this->batteryEndurance and kW = $this->kW <br/>";
	}
}

$sportCar1 = new SportCar();
$sportCar1->showInfo();
$sportCar1->journey(10);

$car1 = new Car();
$car1->showInfo();

$eCar = new ElectricCar();
$eCar->showInfo();

$eCar2 = new ElectricCar("Custom Tesla", 250, 30, 1200);
$eCar2->showInfo();
?>
