<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosty-Projekt-JS</title>
</head>
<body>

<?php

$username = "root"; 
$password = ""; 
$database = "filmweb"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM autor";
$sql = "INSERT INTO autor (imie, nazwisko, rok_debiutu, ilość_filmów)
VALUES ('John', 'Doe', '04.06.2000','8')";

echo "<h2>Status 1: Connected!</h2>";





?>
</body>
</html>