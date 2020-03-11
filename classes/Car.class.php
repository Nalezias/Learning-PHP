<?php
class Car {
    private $mark;
    private $color;
    private $fuelType;
    private $hasOwner;

    public function __construct (string $mark, string $color, string $fuelType, bool $hasOwner) {
        $this->mark = $mark;
        $this->color = $color;
        $this->fuelType = $fuelType;
        $this->hasOwner = $hasOwner;
    }

    public function getMark() {
        return $this->mark;
    }

    public function getColor() {
        return $this->color;
    }

    public function getFuelType() {
        return $this->fuelType;
    }

    public function getHasOwner() {
        if($this->hasOwner) {
            return "have";
        } else {
            return "don't have";
        }
    }
}