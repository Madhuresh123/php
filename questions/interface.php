<?php

interface Skills{

    //cannot initiat properties;

    //do not need to specify access modifier
    function coding();

    //all are abstract methods by default
    function chess();
}

interface Talents{

    function jumping();

    function speaking();

}

interface Achievements{

    function developer();
}

class Person implements Skills{


    //we need to define all interface

    public function coding(){
        echo "Ram is good in coding";
    }


    function chess(){}

}

$ram = new Person();
$ram->coding(); 
