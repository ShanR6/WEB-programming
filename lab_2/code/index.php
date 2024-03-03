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
$arr1 = [4, 2, 5, 19, 13, 0, 10];
$arrNum = 0;
foreach ($arr1 as $item) {
    $arrNum += pow($item, 2);
}
echo "<br>";
echo sqrt($arrNum);

$sqrtNum1 = sqrt(379);
echo "<br>", round($sqrtNum1);
echo "<br>", round($sqrtNum1, 2);
echo "<br>", round($sqrtNum1, 3);

$sqrtNum2 = sqrt(587);
$arr2 = ['floor' => floor($sqrtNum2), 'ceil' => ceil($sqrtNum2)];

$numArr = [4, -2, 5, 19, -130, 0, 10];
echo "<br>", min($numArr);
echo "<br>", max($numArr);

echo "<br>", rand(1, 100);
$randArr = [];
for ($i = 0; $i < 10; $i++) {
    $randArr[] = rand(1, 100);
}

$a = 1;
$b = 45;
echo "<br>", abs($a - $b);

$numArr = [1, 2, -1, -2, 3, -3];
$newNumArr = [];
foreach ($numArr as $item) {
    $newNumArr = abs($item);
}

$num = 30;
$divideArr = [];
for ($i = 1; $i <= $num; $i++) {
    if ($num % $i === 0) {
        $divideArr[] = $i;
    }
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
    if ($sum > 10) {
        echo "<br>", $i + 1;
        break;
    }
}

// task 15
function printStringReturnNumber(): int
{
    echo "<br>", "php";
    return 123;
}

$my_num = printStringReturnNumber();
echo "<br>", $my_num;

// task 16
function increaseEnthusiasm(string $str): string
{
    return $str . '!';
}

echo "<br>", increaseEnthusiasm("It's second lab");

function repeatThreeTimes(string $str): string
{
    return str_repeat($str, 3);
}

echo "<br>", repeatThreeTimes('... --- ...');

echo "<br>";
echo increaseEnthusiasm(repeatThreeTimes('Yeah'));

function cut(string $str, int $num = 10): string
{
    return mb_strcut($str, 0, $num);
}

$arr = [1, 2, 3, 4, 5, 6, 7];
echo "<br>";
function recursion(array $arr, int $index = 0)
{
    if ($index < count($arr)) {
        echo $arr[$index];
        recursion($arr, $index + 1);
    }
}

recursion($arr);

$number = 12345678;
function numSum(int $num): int
{
    $sum = array_sum(str_split(strval($num)));
    if ($sum > 9) {
        return numSum($sum);
    }
    return $sum;
}

echo "<br>", numsum($number);

//task 17
$xArr = ['x', 'xx', 'xxx', 'xxxx', 'xxxxx'];

$arr = [];
function arrayFill(string $str, int $num): array
{
    return str_split(str_repeat($str, $num), strlen($str));
}

$newArr = arrayFill('x', 5);

$arr = [
    [1, 2, 3],
    [4, 5],
    [6]
];
$sum = 0;
foreach ($arr as $item1) {
    foreach ($item1 as $item2) {
        $sum += $item2;
    }
}
echo "<br>", $sum;

$newArr = [];
$value = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $newArr[$i][$j] = $value++;
    }
}

$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo "<br>", $result;


$user = ['name' => 'Alex', 'surname' => 'Andreev', 'patronymic' => 'Sergeevich'];
echo "<br>", $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];

$date = ['year' => '2024', 'month' => '03', 'day' => '03'];
echo "<br>", $date['year'] . '-' . $date['month'] . '-' . $date['day'];

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "<br>", count($arr);
echo "<br>", end($arr);
echo "<br>", prev($arr);

// task 18
function ifCheck1(int $num1, int $num2): bool
{
    if ($num1 + $num2 > 10) {
        return true;
    }
    return false;
}

function ifCheck2(int $num1, int $num2): bool
{
    if ($num1 === $num2) {
        return true;
    }
    return false;
}

$test = 11;
echo "<br>";
echo $test == 0 ? 'верно' : 'неверно';

$age = 56;
if ($age < 10 || $age > 99) {
    echo "<br>", 'Number < 10 or > 99';
} else {
    $sum = array_sum(str_split(strval($age)));
    if ($sum <= 9) {
        echo "<br>", 'single-digit sum';
    } else {
        echo "<br>", 'two-digit sum';
    }
}

$arr = [1, 5, 12];
if (count($arr) === 3) {
    echo "<br>", array_sum($arr);
}

// task 19
for ($i = 1; $i <= 20; $i++) {
    echo "<br>", str_repeat('x', $i);
}