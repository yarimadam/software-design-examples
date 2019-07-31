<?php

use App\Car\Car;
use App\CarFinder\CarFinder;
use App\CarFinder\Criteria\BrandCriteria;
use App\CarFinder\Criteria\TransmissionCriteria;

require_once 'vendor/autoload.php';

/** @var Car[] $cars */
$cars = [
    new Car('Honda', 'Red', 'Manual', '4'),
    new Car('Honda', 'Blue', 'Automatic', '2'),
    new Car('Honda', 'White', 'Automatic', '2'),
    new Car('Honda', 'Blue', 'Manual', '4'),
    new Car('Volkswagen', 'Yellow', 'Automatic', '4'),
    new Car('Volkswagen', 'White', 'Automatic', '2'),
    new Car('Volkswagen', 'Black', 'Manual', '2'),
    new Car('Mitsubishi', 'Red', 'Manual', '4'),
    new Car('Mitsubishi', 'White', 'Manual', '4'),
    new Car('Mitsubishi', 'Black', 'Manual', '2'),
    new Car('Renault', 'White', 'Automatic', '4'),
    new Car('Renault', 'Blue', 'Automatic', '4'),
    new Car('Renault', 'Yellow', 'Manual', '4'),
    new Car('Renault', 'Black', 'Automatic', '2'),
    new Car('Fiat', 'White', 'Manual', '4'),
    new Car('Fiat', 'Blue', 'Manual', '2'),
    new Car('Fiat', 'Orange', 'Automatic', '4'),
    new Car('Fiat', 'Yellow', 'Manual', '4'),
    new Car('Fiat', 'Black', 'Manual', '2'),
];

$criterias = [
    new BrandCriteria('Renault'),
    new TransmissionCriteria('Automatic')
];

$carFinder = new CarFinder($cars, $criterias);

$carsFound = $carFinder->find();

dump($carsFound);
