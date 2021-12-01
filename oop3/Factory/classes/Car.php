<?php

class Car {
    public $carBrand;
    public $carModel;
    
    public function __construct($carBrand, $carModel)
    {
        $this->carBrand = $carBrand;
        $this->carModel = $carModel;
    }
}

class CarFactory {
    public static function createCar($carBrand, $carModel) {
        return new Car($carBrand, $carModel);
    }
}