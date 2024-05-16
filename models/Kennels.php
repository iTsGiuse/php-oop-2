<?php 
    
    require_once __DIR__ . '/Products.php';
    require_once __DIR__ . '/../Traits/Negozio.php';

    class Kennel extends Product{
        public $type;
        public $material;
        private $price;
        public $photo;
        use Negozio; 

    public function __construct($_name, $_type, $_material, $_price, $_photo, $name_city) {
        $this->name = $_name; 
        $this->type = $_type;
        $this->material = $_material;
        $this->setPrice($_price);
        $this->photo = $_photo; 
        $this->setCityName($name_city);

    }
       
    //SETTA PREZZO
    public function setPrice($_price) {
        if ($_price > 20) {
            $this->price = $_price;
        } else {
            echo "Il prezzo deve essere maggiore di venti.";
        }
    }
    
    //OTTIENI PREZZO
    public function getPrice() {
        return $this->price;
    }

}

    $comfyCove = new Kennel('ComfyCove', 'Morbido', 'Tessuto', 60, 'https://www.ibs.it/images/8052575820844_0_536_0_75.jpg', 'Modena');
    $legnoLusso = new Kennel('Legno Lusso', 'Duro', 'Legno', 250, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSVz436lUYlUcfB11Q0gQFTKkHk68C2IG0EqqtVDIkA79jUrdVFDmfB18MJxpxAEeJ85za9sKon2FReIBEFN67p9PxJwSe7qCiHr1QQ0ZsgT1NSrEJ2tsrwlFG6', 'Rubiera');




    $kennelsCat= [
        $comfyCove
    ];
    
    $kennelsDog= [
        $legnoLusso
    ];

?>