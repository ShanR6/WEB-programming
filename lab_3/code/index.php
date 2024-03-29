<?php
// task 1a
$regexp = '/a..b/';
$str = 'ahb acb aeb aeeb adcb axeb';
$matches = [];
$count = preg_match_all($regexp, $str, $matches);
echo "String found: {$count}";
echo '<br />';

// task 1b
$str = 'a1b2c3';
$regexp = '/\d/';
preg_match_all($regexp, $str, $matches);
foreach ($matches[0] as $num) {
	$str = str_replace($num, strval(intval($num) ** 3), $str);
}
echo $str;
echo '<br />';

// task 2a
if(isset($_POST['submit'])){
    $text = $_POST['text'];
    $wordCount = str_word_count($text);
    $charCount = strlen($text);
    echo "Words count: $wordCount<br>";
    echo "Symbols count: $charCount";
}
?>