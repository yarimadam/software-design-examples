<?php

namespace App\CarFinder\Criteria;

use App\Car\Car;

class DoorsCriteria extends AbstractCriteria implements CriteriaInterface
{
    public function met(Car $car): bool
    {
        return $this->criteriaValue == $car->getDoors();
    }
}
