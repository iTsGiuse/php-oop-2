<?php

    trait Negozio {
        public $name_city;

        public function setCityName($name_city) {
            $this->name_city = $name_city;
        }
    
        public function getCityName() {
            return $this->name_city;
        }
    }

    
?>