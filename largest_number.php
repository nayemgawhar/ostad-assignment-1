<?php
// Given numbers
$num1 = 4;
$num2 = 5;
$num3 = 6;

// Variable to hold the largest number
$largest = $num1;

// Compare $largest with $num2
if ($num2 > $largest) {
    $largest = $num2;
}

// Compare $largest with $num3
if ($num3 > $largest) {
    $largest = $num3;
}

// Output the largest number
echo "The largest number among $num1, $num2, and $num3 is: $largest";
?>
