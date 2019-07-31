<?php

namespace App\CarFinder\Criteria;

abstract class AbstractCriteria
{
    protected $criteriaValue;

    public function __construct(string $criteriaValue)
    {
        $this->criteriaValue = $criteriaValue;
    }
}
