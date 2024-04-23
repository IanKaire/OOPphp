<?php

use Vehicles\Car;
require_once 'app/utils/utils.php';

class ElectricCar extends Car {
    public $batteryRange; // Specific property for electric cars

    // Including the FeatureTrait
    use FeatureTrait;

    public function displayElectricInfo() {
        echo "This electric car has a range of $this->batteryRange miles.";
    }
    // Implement drive method for an electric car (futuristic sound)
    public function drive() {
        echo "The $this->model silently glides forward with a futuristic whir!";
    }
}