<?php
// task 1
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

$order = &$very_bad_unclear_name;
$order .= " + 1 cola bottle";
echo $very_bad_unclear_name;

// task 2
echo "<br>"; // "\n" not working properly in browser
$num1 = 10;
echo $num1;

echo "<br>";
$num2 = 3.5;
echo $num2;

echo $num1 + 2;