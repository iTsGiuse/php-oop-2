<?php 

    class Dog {
        public $name;
        public $breed;
        public $age;
        public $price;
        public $photo;

        public function __construct($_name, $_breed, $_age, $_price, $_photo) {
            $this->name = $_name;
            $this->breed = $_breed; 
            $this->age = $_age;
            $this->setPrice($_price);
            $this->photo = $_photo;  
        }


        //SETTA PREZZO
        public function setPrice($_price) {
            if ($_price > 500) {
                $this->price = $_price;
            } else {
                echo "Il prezzo deve essere maggiore di cinquecento.";
            }
        }
    
        //OTTIENI PREZZO
        public function getPrice() {
            return $this->price;
        }

    }


    $coco = new Dog('Coco', 'Labrador', '3', '700', 'https://www.veterinarimatera.it/wp-content/uploads/2021/03/cane-1.jpg' );
    $paco = new Dog('Paco', 'Maltese', '7', '1000', 'https://wips.plug.it/cips/paginegialle.it/magazine/cms/2022/01/cane-di-razza.jpg?w=744&h=418&a=c');

    $dogs= [
        $coco,
        $paco
    ];
?>