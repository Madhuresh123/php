<?php

// current month and year
$currentMonth = date("n");
$currentYear = date("Y");

//display month and year
$displayMonth = isset($_GET['month']) ? $_GET['month'] : $currentMonth;
$displayYear = isset($_GET['year']) ? $_GET['year'] : $currentYear;

// first day of the month
$firstDayOfMonth = strtotime("$displayYear-$displayMonth-01");

// number of days in the month
$daysInMonth = date("t", $firstDayOfMonth);

//name of the month
$monthName = date("F", $firstDayOfMonth);

//day of the week for the first day of the month (0 = Sunday, 6 = Saturday)
$firstDayOfWeek = date("w", $firstDayOfMonth);

 $days = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];

//table
echo "<h2>$monthName $displayYear</h2>";
echo "<table border='1'>";
echo "<tr>";
foreach($days as $day){
    echo "<th>$day</th>";
}
echo "</tr>";
echo "<tr>";

for ($i = 0; $i < $firstDayOfWeek; $i++) {
    echo "<td></td>";
}

for ($day = 1; $day <= $daysInMonth; $day++) {
    echo "<td>$day</td>";

    if (($day + $firstDayOfWeek) % 7 == 0 || $day == $daysInMonth) {
        echo "</tr>";
        if ($day != $daysInMonth) {
            echo "<tr>";
        }
    }
}

echo "</table>";
?>

    