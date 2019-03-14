<?php
$rentalhouses = "bungalow house";

switch ($rentalhouses) {
    case 'single room':
        echo "The cost is 10000!<br/>";
        break;
    case "two bed room":
        echo "The cost is 30000!<br/>";
        break;
    case "three bed room":
        echo "The cost is 45000!<br/>";
        break;
    case "bungalow house":
        echo "The cost is 80000!<br/>";
        break;
    default:
        echo "There are no other rooms!<br/>";
}



$grade = 40;

if ($grade < "40") {
    echo "E!";
} elseif ($grade = "40-55") {
    echo "D";
} elseif ($grade = "56-65") {
    echo "C";
} elseif ($grade = "66-75") {
    echo "B";
} else {
    echo "A";
}
?>