<?php
/*
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$userName=$_GET['name'];
$userEmail=$_GET['email'];
$userAge=$_GET['age'];

if(strlen($userName) < 3 && strpos($userEmail, '@') !== false && strpos($userEmail, '.') !== false && is_numeric($userAge)){
    echo "Access Granted";
} else {
    echo "Access Denied";
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form control</title>
</head>
<body>
    <form action="" method="get">
        <label for="name" name="name"> NAME : </label>
        <input type="text"> 
        <br>
        <br>
        <label for="email"> EMAIL : </label>
        <input type="text" name="email">
        <br>
        <br>
        <label for="age"> AGE : </label>
        <input type="text" name="age">
        <br>
        <br>
        <button type="submit"> SEND </button>
    </form>
</body>
</html>