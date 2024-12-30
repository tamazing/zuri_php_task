<?php

class SportsCar {
    // Attributes (properties)
    private $brand;
    private $model;
    private $maxSpeed;
    private $horsePower;

    // Constructor
    public function __construct($brand, $model, $maxSpeed, $horsePower) {
        $this->brand = $brand;
        $this->model = $model;
        $this->maxSpeed = $maxSpeed;
        $this->horsePower = $horsePower;
    }

    // Getter methods
    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getMaxSpeed() {
        return $this->maxSpeed;
    }

    public function getHorsePower() {
        return $this->horsePower;
    }

    // Method to display car details
    public function displayCarDetails() {
        echo "Brand: " . $this->getBrand() . "\n";
        echo "Model: " . $this->getModel() . "\n";
        echo "Max Speed: " . $this->getMaxSpeed() . " km/h\n";
        echo "Horse Power: " . $this->getHorsePower() . " HP\n";
    }

    // Method for performance feature (to be overridden in LuxuryCar)
    public function showPerformance() {
        return "This is a high-performance sports car!";
    }
}


// Create the `LuxuryCar` Class (Inheriting from `SportsCar`)

// Inheriting from the SportsCar class
class LuxuryCar extends SportsCar {
    // Additional attributes specific to LuxuryCar
    private $leatherSeats;
    private $advancedSoundSystem;

    // Constructor
    public function __construct($brand, $model, $maxSpeed, $horsePower, $leatherSeats, $advancedSoundSystem) {
        // Calling parent constructor (SportsCar)
        parent::__construct($brand, $model, $maxSpeed, $horsePower);
        $this->leatherSeats = $leatherSeats;
        $this->advancedSoundSystem = $advancedSoundSystem;
    }

    // Getter methods
    public function getLeatherSeats() {
        return $this->leatherSeats;
    }

    public function getAdvancedSoundSystem() {
        return $this->advancedSoundSystem;
    }

    // Method to display luxury car details
    public function displayLuxuryCarDetails() {
        // Display inherited car details
        $this->displayCarDetails();
        echo "Leather Seats: " . ($this->getLeatherSeats() ? "Yes" : "No") . "\n";
        echo "Advanced Sound System: " . ($this->getAdvancedSoundSystem() ? "Yes" : "No") . "\n";
    }

    // Method overriding (Customizing performance message)
    public function showPerformance() {
        return "This is a luxury sports car with ultimate comfort and performance!";
    }

    // LuxuryCar specific feature
    public function showLuxuryFeatures() {
        echo "Enjoy the smooth ride with leather seats and an advanced sound system.\n";
    }
}


// Demonstrating Inheritance, Method Overriding, and Object Creation

// Create instances of both SportsCar and LuxuryCar

// Create a SportsCar instance
$sportsCar = new SportsCar("Ferrari", "488 Spider", 325, 660);
echo "Sports Car Details:\n";
$sportsCar->displayCarDetails();
echo "Performance: " . $sportsCar->showPerformance() . "\n\n";

// Create a LuxuryCar instance
$luxuryCar = new LuxuryCar("Rolls-Royce", "Wraith", 250, 624, true, true);
echo "Luxury Car Details:\n";
$luxuryCar->displayLuxuryCarDetails();
echo "Performance: " . $luxuryCar->showPerformance() . "\n\n";
$luxuryCar->showLuxuryFeatures();
?>