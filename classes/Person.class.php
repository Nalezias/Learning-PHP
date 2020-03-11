<?php
    class Person {
        private $firstName;
        private $lastName;
        private $age;
        private $eyeColor;
        private $hasCar;


        //setters
        public function setFirstName($newName) {
            $this->firstName = $newName;
        }

        public function setLastName($newLastName) {
            $this->lastName = $newLastName;
        }

        public function setAge($newAge) {
            $this->age = $newAge;
        }

        public function setEyeColor($newEyeColor) {
            $this->eyeColor = $newEyeColor;
        }

        public function setHasCar($newHasCar) {
            $this->hasCar = $newHasCar;
        }

        //getters
        public function getFirstName() {
            return $this->firstName;
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function getAge() {
            return $this->age;
        }

        public function getEyeColor() {
            return $this->AeyeColorge;
        }

        public function getHasCar() {
            if($this->hasCar) {
                return "have";
            } else {
                return "don't have";
            }
        }
    }