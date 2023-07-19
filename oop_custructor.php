<?php

    class Fruit{

        public $name;
        public $color;

        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        function get_name(){
            return $this->name;
        }

        function get_color(){
            return $this->color;
        }

    }

    $mango = New Fruit("Mango", "Yellow");
    echo $mango->get_name();
    echo "<br>";
    echo $mango->get_color();

?>