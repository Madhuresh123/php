
<?php

    class Fruit{

        public $name;
        private $color;
        protected $weight;

    }

    $apple = new Fruit();

    $apple->name = "Apple"; // ok
    $apple->color = "Red"; // error
    $apple->weight = "1kg"; // error
?>

<?php

    class Fruit{

        public $name;
        public $color;
        public $weight;

        public function set_name($name){
            $this->name = $name;
        }

        protected function set_color($color){
            $this->name = $color;
        }

        private function set_weight($weight){
            $this->name = $weight;
        }
    }

    $apple = new Fruit();

    $apple->set_name("Apple"); // ok
    $apple->set_color("Red"); // Error
    $apple->set_weight("1kg"); // Error

?>