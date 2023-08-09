<?php

    trait Cut{

        public function cutFruits(){    

            echo "cut the fruit";

        }
    }

    class Apple{

        use Cut;

        public function cutFruits(){    

            echo "cut the Apple";

        }

    }

    class Orange{

        use Cut;

    }

    class Mango{

        use Cut;


    }

    class Juice extends Apple{

        use Cut;

        public function cutFruits(){    

            echo "cut apple to make juice";

        }



    }


$fruit1 = new Juice();
$fruit1->cutFruits();

// $fruit1 = new Mango();
// $fruit1->cutFruits();

// $fruit1 = new Orange();
// $fruit1->cutFruits();







