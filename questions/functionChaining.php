<?php

class Person{


    public function eat(){
        echo "person is eating.<br>";
        return $this;
    }

    public function walk(){
        echo "person is walking.<br>";
        return $this;

    }

    public function sleep(){
        echo "person is sleeping.";
    }

}

$Ram = new Person();
$Ram->eat()->walk()->sleep();