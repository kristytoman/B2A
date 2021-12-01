<?php

require_once(__DIR__.'/classes/Car.php');

$car1 = CarFactory::createCar('BMW', 'idk v autech se nevyznám');

echo $car1->carBrand;
echo '<br>';
echo $car1->carModel;