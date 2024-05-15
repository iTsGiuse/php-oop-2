<?php 

    class Cat {
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


    $iron = new Cat('Iron', 'Sianese', '2', 'https://img.freepik.com/free-photo/adorable-looking-kitten-with-yarn_23-2150886292.jpg');
    $ketty = new Cat('Ketty', 'Persiano', '6', 'https://www.my-personaltrainer.it/2023/07/26/gatto-che-fissa_900x760.jpeg');

    $cats= [
        $iron,
        $ketty
    ];
?>