<?php 

    require_once __DIR__ . '/Products.php';
    require_once __DIR__ . '/../Traits/Negozio.php';

    class Game extends Product{
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
            if ($_price > 10) {
                $this->price = $_price;
            } else {
                echo "Il prezzo deve essere maggiore di dieci.";
            }
        }
    
        //OTTIENI PREZZO
        public function getPrice() {
            return $this->price;
        }

    }


    $coco = new Game('Serpentello', 'Plastica', 'Medio / Duro', 20, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTZGfhe5AK4mFy1QLJnsZb-W9CjchDnO5bIhrutUIz9DT2dLnBySpgS2hqDF3pf7UF46wyQrtLoqwEPyBZuZE0YLR2IyVEWDtNu_MkzRU-Xf3iFegSR4vPBCg', 'Reggio Emilia' );
    $paco = new Game('Spara Palline', 'Plastica', 'Duro', 50, 'https://img.kwcdn.com/product/1e133b362c3/b206c9bf-f17d-4655-b135-b8b1c06d7030_800x800.jpeg?imageView2/2/w/650/q/50/format/webp', 'Carpi');

    $gamesCat= [
        $coco
    ];

    $gamesDog= [
        $paco
    ];

?>