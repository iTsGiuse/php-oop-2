<?php 
    
    require_once __DIR__ . './Prodotti.php';
    
    class Cuccia extends Product{
        public $name;
        public $type;
        public $material;
        private $price;
        public $photo;

        public function __construct($_name, $_type, $_material, $_price, $_photo) {
            $this->name = $_name; 
            $this->type = $_type;
            $this->material = $_material;
            $this->setPrice($_price);
            $this->photo = $_photo; 
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

    $comfyCove = new Cuccia('ComfyCove', 'Morbido', 'Tessuto', 60, 'https://www.ibs.it/images/8052575820844_0_536_0_75.jpg');
    $legnoLusso = new Cuccia('Legno Lusso', 'Duro', 'Legno', 250, 'https://www.byaldino.com/wp-content/uploads/2020/10/legowiska-12529783_69465170.jpg');

    $cuccie= [
        $comfyCove,
        $legnoLusso
    ];
?>