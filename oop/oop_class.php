
<?php
    class Fruit{

        public $name;
        public $color;

        function set_name($n) {
            $this->name = $n;
        }

        function get_name(){
            return $this->name;
        }

        function set_color($n){
            $this->color = $n;
        }

        function get_color(){
            return $this->color;
        }
    }

    $apple = New Fruit();

    $apple->set_name("Apples");
    $apple->set_color("Green");

    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();
?>