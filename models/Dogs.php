<?php 

    class Dog {
        public $name;
        public $breed;
        public $age;
        public $photo;

        public function __construct($_name, $_breed, $_age, $_photo) {
            $this->name = $_name;
            $this->breed = $_breed; 
            $this->age = $_age;
            $this->photo = $_photo;  
        }

    }


    $coco = new Dog('Coco', 'Barboncino', '3', 'https://www.veterinarimatera.it/wp-content/uploads/2021/03/cane-1.jpg' );
    $paco = new Dog('Paco', 'Maltese', '7', 'https://wips.plug.it/cips/paginegialle.it/magazine/cms/2022/01/cane-di-razza.jpg?w=744&h=418&a=c');

    $dogs= [
        $coco,
        $paco
    ];
?>