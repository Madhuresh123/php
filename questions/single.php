<?php

class Mammal{

    public function mammalwalk(){
        echo "A mamal is walking";
    }

}

class Dog extends Mammal{

    public function dogwalk(){
        echo "A Dog is walking";
    }

}

class Pet extends Dog{

    public function petwalk(){
        echo "A Pet Dog is walking";
    }

}

$animal = new Pet();

$animal->petwalk();
$animal->dogwalk();
$animal->mammalwalk();

