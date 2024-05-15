<?php 

    class Cat {
        public $name;
        public $breed;
        public $age;
        private $price;
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


    $iron = new Cat('Iron', 'Sianese', '2', '2000', 'https://img.freepik.com/free-photo/adorable-looking-kitten-with-yarn_23-2150886292.jpg');
    $ketty = new Cat('Ketty', 'Persiano', '6', '1500', 'https://www.my-personaltrainer.it/2023/07/26/gatto-che-fissa_900x760.jpeg');

    $cats= [
        $iron,
        $ketty
    ];
?>