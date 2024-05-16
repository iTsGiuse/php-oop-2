<?php 

    class Product {
        public $name;

        public function __construct($_name) {
            $this->name = $_name;
        }

    }

    $cuccie= new Product('Cuccie');
    $giochi= new Product('Giochi');

    $products= [
      $cuccie,
      $giochi
    ];
?>