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

echo "<br>";
echo $num1 + 2;

echo "<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;

// task 11
echo "<br>";
$num_language = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_language;
echo $days_per_language;

// task 12
echo "<br>";
echo 8 ** 2;

// task 13
$my_num = 5;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "<br>";
echo $answer;

// task 14
$a = 10;
$b = 3;
$c = $a % $b;

echo "<br>";
if ($c === 0) {
    echo 'Делится: ', $a / $b;
} else {
    echo 'Делится с остатком: ', $c;
}

$st = pow(2, 10);
$sqrt = sqrt(245);
$arr = [4, 2, 5, 19, 13, 0, 10];
$arrNum = 0;
foreach ($arr as $item) {
    $arrNum += pow($item, 2);
}
echo "<br>";
echo sqrt($arrNum);

$sqrtNum = sqrt(379);
echo "<br>", round($sqrtNum);
echo "<br>", round($sqrtNum, 2);
echo "<br>", round($sqrtNum, 3);