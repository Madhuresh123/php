<?php

    class Fruit{

        public $name;
        public $color;


        public function __construct($name, $color){

            $this->name = $name;

            $this->color = $color;
        }

        public function __destruct(){
            echo "The fruit name is $this->name and its color is $this->color";
        }

    }

        class Mango extends Fruit{

            public function message(){
                echo "I m a fruit <br>";
            }
        }


    $mango = new Mango("mango", "Green");
    $mango->message();


?>