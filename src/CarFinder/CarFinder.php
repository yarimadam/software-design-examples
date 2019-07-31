<?php

namespace App\CarFinder;

use App\Car\Car;
use App\CarFinder\Criteria\CriteriaInterface;

class CarFinder
{
    private $carCollection;
    /** @var CriteriaInterface[] */
    private $criteriaCollection;

    public function __construct(array $carCollection, array $criteriaCollection)
    {
        $this->carCollection = $carCollection;
        $this->criteriaCollection = $criteriaCollection;

    }

    public function find()
    {
        $carsFound = [];

        foreach ($this->carCollection as $car) {
            if ($this->carMeetsAllCriterias($car)) {
                $carsFound[] = $car;
            }
        }

        return $carsFound;
    }

    private function carMeetsAllCriterias(Car $car): bool
    {
        foreach ($this->criteriaCollection as $criteria) {
            if ($criteria->met($car) === false) {
                return false;
            }
        }

        return true;
    }
}