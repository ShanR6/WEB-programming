<?php
// task 2a
if(isset($_POST['submit'])){
    $text = $_POST['text'];
    $wordCount = str_word_count($text);
    $charCount = strlen($text);
    echo "Words count: $wordCount<br>";
    echo "Symbols count: $charCount";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
</head>
<body>
<form method="post">
    <textarea name="text"></textarea><br>
    <input type="submit" name="submit" value="Count">
</form>
</body>
</html>