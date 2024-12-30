<?php

abstract class Car {
    protected $brand;
    protected $model;
    protected $speed;

    // Constructor to initialize car properties
    public function __construct($brand, $model, $speed) {
        $this->brand = $brand;
        $this->model = $model;
        $this->speed = $speed;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getSpeed() {
        return $this->speed;
    }
    abstract public function race();
}

?>


<?php

// SportsCar class inheriting from Car
class SportsCar extends Car {
    public function __construct($brand, $model, $speed) {
        parent::__construct($brand, $model, $speed);
    }

    // Overriding race method for sports car
    public function race() {
        return $this->brand . " " . $this->model . " zooms ahead at " . $this->speed . " km/h!";
    }
}

// LuxuryCar class inheriting from Car
class LuxuryCar extends Car {
    public function __construct($brand, $model, $speed) {
        parent::__construct($brand, $model, $speed);
    }

    // Overriding race method for luxury car
    public function race() {
        return $this->brand . " " . $this->model . " cruises smoothly at " . $this->speed . " km/h!";
    }
}
?>

