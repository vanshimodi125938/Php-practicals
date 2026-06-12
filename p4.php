<?php
$month = date("F");

echo "Current Month: " . $month . "<br><br>";

// Using if...else
if ($month == "January") {
    echo "Month is January<br>";
} else {
    echo "Month is not January<br>";
}

// Using switch
switch ($month) {
    case "January":
        echo "Switch: January";
        break;
    case "June":
        echo "Switch: June";
        break;
    case "March":
        echo "Switch: March";
        break;
    default:
        echo "Other month";
}
?>