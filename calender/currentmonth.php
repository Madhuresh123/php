<?php

class Calender{
        
        private $weeks;
        private $days;
        private $months;
        private $years;

        public function dayArray($day){

            $this->days = $day;
        }

        public function weekArray($week){

            $this->weeks = $week;
        }

        public function monthArray($month){

            $this->months = $month;
        }
        public function yearArray($year){

            $this->years = $year;
        }
}

    $weeks = ["Monday","Tuesday","Wednesday","Thrushday","Friday","Saturday","Sunday"];

$currectMonth  = new Calender();

$currectMonth->monthArray(9);