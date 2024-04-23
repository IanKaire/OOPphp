<?php

interface isDrivable {
    // Method to simulate driving the car (without implementation)
    public function drive();
}

trait FeatureTrait {
    public function hasFeature($feature) {
        // Logic to check if the object has the specified feature
        echo "Checking for feature: $feature";
    }
}
