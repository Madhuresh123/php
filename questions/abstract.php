<?php

 abstract class Employee{

        //properties
        public $name;
        protected $age;
        private $salary;
         
        //normal methods
        public function __set_deatils($name, $age, $salary){

            $this-> name = $name;
            $this->age = $age;
            $this->salary = $salary;
        }


        //abstract method
        abstract protected function emp_details();

        public function __get_details(){

            echo "Name of the person is ". $this->name. "<br>" ;
            echo "Age of the person is ". $this->age . "<br>" ;
            echo "Salary of the person is ". $this->salary . "<br>";

        }

}

class department extends Employee{


    public function emp_details(){
        echo "I'm here";
    }

    public function set_emp_details($name, $age, $salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function get_emp_details(){
        echo "Name of the person is ". $this->name. "<br>" ;
        echo "Age of the person is ". $this->age . "<br>" ;
        echo "Salary of the person is ". $this->salary . "<br>";

    }


}

$person1 = new department();

// $person1->emp_details();
// $person1->__set_deatils("Madhuresh",23,100000);
// $person1->__get_details();

$person1->set_emp_details("Rohit",25,90000);
$person1->get_emp_details();



