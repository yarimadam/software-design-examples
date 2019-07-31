<?php

namespace App\Car;

class Car
{
    private $brand;
    private $color;
    private $transmission;
    private $doors;

    public function __construct(string $brand, string $color, string $transmission, string $doors)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->transmission = $transmission;
        $this->doors = $doors;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getTransmission(): string
    {
        return $this->transmission;
    }

    public function getDoors(): string
    {
        return $this->doors;
    }
}
