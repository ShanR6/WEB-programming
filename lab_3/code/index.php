<?php
// task 2b
session_start();

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    if (isset($_POST['surname'])) {
        $_SESSION['surname'] = $_POST['surname'];
    }
    if (isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    }
    if (isset($_POST['age'])) {
        $_SESSION['age'] = $_POST['age'];
    }
}

if (isset($_SESSION['surname'], $_SESSION['name'], $_SESSION['age'])) {
    echo 'Surname: ' . $_SESSION['surname'];
    echo '<br />';
    echo 'Name: ' . $_SESSION['name'];
    echo '<br />';
    echo 'Age: ' . $_SESSION['age'];
    echo '<br />';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    Surname:
    <input type="text" id="surname" name="surname"><br>

    Name:
    <input type="text" name="name"><br>

    Age:
    <input type="number" name="age"><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>