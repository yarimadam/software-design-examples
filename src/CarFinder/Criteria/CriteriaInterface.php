<?php

namespace App\CarFinder\Criteria;

use App\Car\Car;

interface CriteriaInterface
{
    public function met(Car $car): bool;
}
