<?php

//polymorphism - same methods different results;

class Circle{

    public function area($radius){
        return 3.14*$radius*$radius;
    }

}   

class Rectriange{

    public function area($length,$breath){
        return $length*$breath;
    }

}

class Triangle {

    public function area($height,$base){
        return ($height+$base)/2;
    }
}

$shape1 = new Circle();
$shape2 = new Rectriange();
$shape3 = new Triangle();


echo "Area of the circle = " . $shape1->area(2). "<br>";
echo "Area of the Rectriangle = " . $shape2->area(2,3) . "<br>";
echo "Area of the triangle = " . $shape3->area(2,4);