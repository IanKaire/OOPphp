<?php

namespace Vehicles;

use isDrivable;
use FeatureTrait;

require_once 'app/utils/utils.php';

class Car implements isDrivable {


    // Public Properties (data about the car)
    public $color;
    public $model;
    public $year;

    // Private Properties
    private $vehicleIdentificationNumber;

    // Including the FeatureTrait
    use FeatureTrait;

    //Constructor
    public function __construct($color,$model,$year)
    {
        $this->color = $color;
        $this->model = $model;
        $this->year = $year;
    }

    public function getVehicleIdentificationNumber() {
        return $this->vehicleIdentificationNumber;
    }

    public function setVehicleIdentificationNumber ($newVehicleIdentificationNumber) {
        // Add validation or logic here before setting the vehicleIdentificationNumber
        $this->vehicleIdentificationNumber = $newVehicleIdentificationNumber;
    }

    // Method to display car information (behaviour)
    public function displayInfo() {
        echo "This car is a $this->color $this->model from $this->year with a V.I.N of $this->vehicleIdentificationNumber.";
    }

    // Implement drive method for a normal car (engine sound)
    public function drive() {
        echo "The $this->model is driving with a rumble of the engine!";
    }

}











