<?php

require 'app/models/cars.php';
require 'app/models/electricCars.php';

use Vehicles\Car;

// Create three objects (cars) from the Car class
$car1 = new Car("black","Ford Mustang",2023);
$car2 = new Car("silver", "Toyota Camry", 2024);
$car3 = new Car("metallic blue", "Chevrolet Silverado", 2024);


// Create an object (electric cars) from the Electric Car class
$electricCar = new ElectricCar("blue","Tesla Model S", 2024);

// Set properties (data) for each car object of ElectricCar class
$electricCar->batteryRange = 350;

// Overwriting properties (data) for first car object of Car class
$car1->color = "red";
$car1->model = "Sedan";
$car1->year = 2020;

// Access year using getter
$carVehicleIdentificationNumber = $car1->getVehicleIdentificationNumber();

// Modify year using setter with potential validation
$car1->setVehicleIdentificationNumber(9383837832);


// Call the displayInfo method on each object to print information of Car class
$car1->displayInfo();
$car2->displayInfo();
$car3->displayInfo();
$car3->hasFeature("sunroof");

// Call the displayInfo & displayElectricInfo method on electricCar object to print information of ElectricCar class
$electricCar->displayInfo(); // Inherited from Car
$electricCar->displayElectricInfo(); // Specific to ElectricCar
$electricCar->hasFeature("heated seats");