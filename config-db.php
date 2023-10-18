<?php

$servername = "localhost";
$username = "root";
$password = "";

//$db = 'sqlite:invent.sqlite';
$db = "mysql:host=$servername;dbname=invent";

try {
    $pdo = new PDO($db, $username, $password);
} catch (PDOException $e) {
    echo 'Ошибка соединения с БД '.$e->getMessage();
    //TODO: почему-то ошибка не обрабатывается
}
